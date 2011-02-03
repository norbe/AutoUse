<?php

use Nette\Object;
use Nette\Finder;
use Nette\String;
use Nette\Debug;
/**
 * AutoUseWorkers - part of AutoUse tool.
 * Class for automatic insertion of USE statements
 *
 * @copyright  Copyright (c) 2011 Karel Hák
 * @license    New BSD License
 * @link       http://github.com/norbe/AutoUse
 */
class AutoUseWorker extends Object {
	/**#@+ Array keys */
	const NS_USE_STATEMENTS = T_USE;
	const NS_USED_CLASS = "used_class";
	const NS_MISSING_USE = "missing_use";
	const NS_POSSIBLE_CB = "possible_cb";

	const USE_ST_NAME = "name";
	const USE_ST_USED = "used";
	const USE_ST_AS = "as";

	const FILE = "file";
	const CLASS_NAME = "class";
	const CLASS_OCCURENCES = "class_occurences";
	const NAMESPACE_NAME = "namespace";
	const LINE = "line";
	const TIME = "time";
	const VALUE = "value";
	/**#@-*/

	/**#@+ Output info */
	const OI_FILE_ANALYSED = 0;
	const OI_CLASS_NOT_FOUND = 1;
	const OI_AMBIGOUS_CLASS_IN_NS = 2;
	const OI_CANT_ADD_USE_ST = 3;
	const OI_USE_ST_ADDED = 4;
	const OI_UNUSED_USE_ST = 5;
	const OI_POSSIBLE_CALLBACK = 6;
	/**#@-*/

	/** @var array of function($outputInfo, array $params) */
	public $onOutput;

	/**#@+ Settings */
	private $sourceDir = array();
	private $libDirs = array();
	private $ignoredDirs = array();
	/**#@-*/

	/**#@+ Parser's working atributes  */
	private $namespace = "";
	private $reserved = array("self", "parent", "static", "null", "true", "false", "array");
	private $tokens = array();
	private $currentToken = NULL;
	private $nsCurlyLevel = 0;
	private $curlyLevel = 0;
	private $currentFile = NULL;
	private $isSource = FALSE;
	/**#@-*/

	/**#@+ Results of analyse  */
	private $fileInfo = array();
	private $definedClasses = array();
	/**#@-*/

	public $log = array();

	public function setSource($directory) {
		$this->sourceDir = $directory;
	}

	public function addLibrary($directory) {
		if(is_array($directory)) {
			$this->libDirs += $directory;
		}
		else {
			$this->libDirs[] = $directory;
		}
	}

	public function addIgnoredDirs($mask) {
		if(is_array($mask)) {
			$this->ignoredDirs += $mask;
		}
		else {
			$this->ignoredDirs[] = $mask;
		}
	}

	protected function analyse() {
		$this->isSource = TRUE;
		// collect informations from all classes
		foreach(array_merge(array($this->sourceDir), $this->libDirs) as $dir) {
			foreach(Finder::findFiles("*.php")->from($dir)->exclude($this->ignoredDirs) as $fileInfo) {
				debug::timer($fileInfo->getFilename());
				$this->parseFile($fileInfo->getPath() . "/" . $fileInfo->getFilename());
				$this->onOutput(self::OI_FILE_ANALYSED, array(
					self::FILE => $fileInfo->getFilename(),
					self::TIME => debug::timer($fileInfo->getFilename()),
				));
			}

			$this->isSource = FALSE;
		}
	}

	/**
	 * Automatically insert USE statement. Please setup specify source and libs directories
	 *
	 * <b>WARNING: This method overwrite original source files, please backup it before use </b>
	 * @see setSource, addLibrary
	 */
	public function run() {
		$this->analyse();
		
		// insert neccessery use statements
		foreach($this->fileInfo as $filename => $namespaces) {
			$modified = FALSE;
			$fileAsArray = array();
			foreach($namespaces as $namespace => &$nsInfo) {
				$useInsertLine = NULL;
				$nsInfo[self::NS_MISSING_USE] = $nsInfo[self::NS_USED_CLASS];
				// find out which classes has already USE statement
				foreach($nsInfo[self::NS_MISSING_USE] as $usedClass => $line) {
					$relativeNs = !String::startsWith($usedClass, "\\");
					$lastBackslash = strrpos($usedClass, "\\");
					$classNs = substr($usedClass, $relativeNs?0:1, ($lastBackslash)?($lastBackslash - ($relativeNs?0:1)):NULL);
					$class = substr($usedClass, ($lastBackslash !== FALSE)?($lastBackslash+1):0);

					if(isset($this->definedClasses[$class][$namespace])
						|| (isset($this->definedClasses[$class][$classNs]) && strlen($classNs))) {
					// class exist in specified namespace
						unset($nsInfo[self::NS_MISSING_USE][$usedClass]);
					}
					else if(!$relativeNs) {
					// class was used with absolute namespace
						unset($nsInfo[self::NS_MISSING_USE][$usedClass]);
						if(!isset($this->definedClasses[$class][$classNs])) {
							// class used with absolute namespace doesn't exists (forgotten library?)
							$this->onOutput(self::OI_CLASS_NOT_FOUND, array(
								self::NAMESPACE_NAME => $namespace,
								self::FILE => $filename,
								self::LINE => $line,
								self::CLASS_NAME => $usedClass,
							));
//							dump("$filename, $line : $usedClass class used with absolute namespace doesn't exists (forgotten library?)");
						}
					}
					else {
						// looking for use statement associated with used class
						foreach($nsInfo[self::NS_USE_STATEMENTS] as $as => $useStatement) {
							$lastBackslash = strrpos($useStatement[self::USE_ST_NAME], "\\");
							$relativeNs = !String::startsWith($useStatement[self::USE_ST_NAME], "\\");

							if(!isset($useInsertLine) || $useStatement["line"] > ($useInsertLine+1)) {
								$useInsertLine = $useStatement["line"]-1;
							}

							$useNs = substr($useStatement[self::USE_ST_NAME], $relativeNs?0:1, ($lastBackslash)?($lastBackslash - ($relativeNs?0:1)):NULL);
							if(isset($this->definedClasses[$as][$namespace]) && $useNs != $namespace) {
								// require of file with "$namespace\$as" class can cause error
								$this->onOutput(self::OI_AMBIGOUS_CLASS_IN_NS, array(
									self::NAMESPACE_NAME => $namespace,
									self::FILE => $filename,
									self::USE_ST_AS => $as,
									self::LINE => $useStatement[self::LINE],
								));
							}

							if($usedClass === $as) {
								// mark use statement as used
								$nsInfo[self::NS_USE_STATEMENTS][$as]["used"] = TRUE;
								unset($nsInfo[self::NS_MISSING_USE][$usedClass]);
							}
							else if(String::startsWith($classNs, $as . "\\")) {
								// check for NS aliases
								$tmpNs = String::replace($classNs, "/[^\\\\]+/", $useStatement[self::USE_ST_NAME], 1);
								if(isset($this->definedClasses[$class][$tmpNs])) {
									// mark use statement as used
									$nsInfo[self::NS_USE_STATEMENTS][$as]["used"] = TRUE;
									unset($nsInfo[self::NS_MISSING_USE][$class]);
								}
							}
						}
					}
				}

				// inform about unnecessary use statements
				foreach($nsInfo[self::NS_USE_STATEMENTS] as $as => $useStatement) {
					if(!$useStatement["used"]) {
						$this->onOutput(self::OI_UNUSED_USE_ST, array(
							self::FILE => $filename,
							self::LINE => $useStatement[self::LINE],
							self::NAMESPACE_NAME => $namespace,
							self::USE_ST_AS => $as,
						));
//						dump("$as not used USE statement");
					}
				}

				// try to insert missing USE statements
				foreach($nsInfo[self::NS_MISSING_USE] as $class => $line) {
					if(!isset($this->definedClasses[$class]) || !count($this->definedClasses[$class])) {
						// class doesn't exists
						$this->onOutput(self::OI_CLASS_NOT_FOUND, array(
							self::FILE => $filename,
							self::LINE => $line,
							self::NAMESPACE_NAME => $namespace,
							self::CLASS_NAME => $class,
						));
					}
					else if(count($this->definedClasses[$class]) > 1) {
						$this->onOutput(self::OI_CANT_ADD_USE_ST, array(
							self::FILE => $filename,
							self::LINE => $line,
							self::NAMESPACE_NAME => $namespace,
							self::CLASS_NAME => $class,
							self::CLASS_OCCURENCES => $this->definedClasses[$class],
						));
					}
					else {
						if(!$modified) {
							// convert file to array
							$fileAsArray = file($filename, FILE_IGNORE_NEW_LINES);
						}

						if(!isset($useInsertLine)) {
							// we create one row space after NS statement
							$useInsertLine = $nsInfo[self::LINE]-1;
							$fileAsArray[$useInsertLine] .= PHP_EOL;
						}
						reset($this->definedClasses[$class]); // make sure array pointer is at first element
						$namespace = key($this->definedClasses[$class]);
						// we get original class name (not converted to lower case)
						$className = $this->definedClasses[$class][$namespace][self::CLASS_NAME];
						$fileAsArray[$useInsertLine] .= PHP_EOL . "use $namespace".(strlen($namespace)?"\\":""). "$className;";

						$this->onOutput(self::OI_USE_ST_ADDED, array(
							self::FILE => $filename,
							self::LINE => $line,
							self::NAMESPACE_NAME => $namespace,
							self::CLASS_NAME => $className,
						));
						$modified = TRUE;
					}
				}
			}
			if($modified) {
				$file = fopen($filename, "w");
				fwrite($file, implode(PHP_EOL, $fileAsArray));
				fclose($file);
			}
		}
	}

	/**
	 * Parse given file and add results to $this->fileInfo and $this->namespace
	 * @param string $filename
	 * @param bool $isSource
	 */
	private function parseFile($filename) {
		$s = file_get_contents($filename);
		$this->tokens  = array_reverse(token_get_all($s));
		$this->currentFile = $filename;
		$this->parseTokens();
	}


	public function getNextToken() {
		while(TRUE) {
			$token = array_pop($this->tokens);
			if(is_null($token)) {
				throw new InvalidStateException("Not anought tokens");
			}
			if(!$this->isAllowed($token, array(T_COMMENT, T_DOC_COMMENT))) {
				break;
			}
		}
		$this->currentToken = $token;
		return $token;
	}

	/**
	 * Check if token is from given type(s)
	 * @param $token
	 * @param array|char|T_{constant_name} $type
	 * @return bool
	 */
	private function isAllowed($token, $type) {
		if(!is_array($type)) {
			$type = array($type);
		}
		return FALSE !== array_search(is_array($token)?$token[0]:$token, $type);
	}

	private function returnToken($token) {
		array_push($this->tokens, $token);
	}


	private function parseTokens() {
		try {
			$this->closeNamespace();
			while(TRUE) {
				$token = $this->getNextToken();
				switch(TRUE) {
				case $this->isAllowed($token, array("{", T_CURLY_OPEN, T_DOLLAR_OPEN_CURLY_BRACES)):
					$this->curlyLevel++;
					break;
				case $this->isAllowed($token, "}"):
					$this->curlyLevel--;
					if($this->curlyLevel === $this->nsCurlyLevel) {
						$this->closeNamespace();
					}
					break;
				case $this->isAllowed($token, T_NAMESPACE):
					$this->parseNamespace();
					break;
				case $this->isAllowed($token, array(T_CLASS, T_INTERFACE)):
					$this->parseClassDefinition();
					break;
				case $this->isSource && $this->isAllowed($token, T_USE):
					$this->parseUseStatement();
					break;
				case $this->isSource && $this->isAllowed($token, array(T_IMPLEMENTS, T_EXTENDS)):
					$this->parseExtends();
					break;
				case $this->isSource && $this->isAllowed($token, array(T_INSTANCEOF, T_NEW)):
					$this->parseClassUsage();
					break;
				case $this->isSource && $this->isAllowed($token, array(T_STRING, T_NS_SEPARATOR)):
					$this->returnToken($token);
					$this->parseClassUsage(T_DOUBLE_COLON);
					break;
				case $this->isSource && $this->isAllowed($token, array(T_FUNCTION,T_CATCH)):
					$this->parseTypeHints();
					break;
				case $this->isSource && $this->isAllowed($token, array(T_CONSTANT_ENCAPSED_STRING, T_ENCAPSED_AND_WHITESPACE)):
					$this->parseCallback();
				}
			}
		} catch(InvalidStateException $e) {
			$this->currentFile = NULL;
		}
	}

	public function setNamespace($name, $line = 1) {
		if($this->isSource && !isset($this->fileInfo[$this->currentFile][$name])) {
			$this->fileInfo[$this->currentFile][$name] = array(
				self::NS_USED_CLASS => array(),
				self::NS_USE_STATEMENTS => array(),
				self::NS_MISSING_USE => array(),
				self::LINE => $line,
			);
		}
		$this->namespace = $name;
	}

	private function closeNamespace() {
		$this->nsCurlyLevel = NULL;
		$this->setNamespace("");
	}

	private function skipSpaces() {
		$spaces = 0;
		while(TRUE) {
			$token = $this->getNextToken();
			if(!$this->isAllowed($token, array(T_WHITESPACE))) {
				$this->returnToken($token);
				break;
			}
			$spaces++;
		}
		return $spaces;
	}

	private function parseName() {
		$name = "";
		$this->skipSpaces();
		while(TRUE) {
			$token = $this->getNextToken();
			if(!$this->isAllowed($token, array(T_STRING, T_NS_SEPARATOR))) {
				$this->returnToken($token);
				break;
			}
			$name .= $token[1];
		}
		$this->skipSpaces();
		return str_replace("namespace/", "{$this->namespace}/", $name);
	}

	private function parseNames() {
		$names = array();
		while(($name = $this->parseName()) !== "") {
			$names[] = $name;
			$token = $this->getNextToken();
			if(!$this->isAllowed($token, ",")) {
				$this->returnToken($token);
				break;
			}
		}
		return $names;
	}

	private function parseNamespace() {
		$line = $this->currentToken[2];
		$name = $this->parseName();
		$token = $this->getNextToken();
		if($this->isAllowed($token, "{")) {
			$this->nsCurlyLevel = $this->curlyLevel;
			$this->curlyLevel++;
		}
		else {
			$this->returnToken($token);
			$this->nsCurlyLevel = NULL;
		}

		$this->setNamespace($name, $line);
	}

	private function parseUseStatement() {
		$line = $this->currentToken[2];

		while(($name = $this->parseName()) !== "") {
			$names[] = $name;
			$token = $this->getNextToken();

			if($this->isAllowed($token, T_AS)) {
				$as = $this->parseName();
				break;
			}
			else {
				$pos = strrpos($name, "\\");
				$as = substr($name, $pos>0?($pos+1):0);
			}

			$this->fileInfo[$this->currentFile][$this->namespace][self::NS_USE_STATEMENTS][String::lower($as)] = array(
				self::USE_ST_NAME => $name,
				self::LINE => $line,
				self::USE_ST_USED => FALSE,
				);

			if(!$this->isAllowed($token, ",")) {
				$this->returnToken($token);
				break;
			}
		}
	}


	private function parseClassDefinition() {
		$line = $this->currentToken[2];
		$name = $this->parseName();
		$nameLC = String::lower($name);
		if(!isset($this->definedClasses[$nameLC])) {
			$this->definedClasses[$nameLC] = array();
		}
		$this->definedClasses[$nameLC][$this->namespace] = array(
				self::FILE => $this->currentFile,
				self::LINE => $line,
				self::CLASS_NAME => $name,
			);
	}


	private function parseExtends() {
		$line = $this->currentToken[2];
		$names = $this->parseNames();
		foreach($names as $name) {
			$this->fileInfo[$this->currentFile][$this->namespace][self::NS_USED_CLASS][String::lower($name)] = $line;
		}
	}

	private function parseClassUsage($allowedAfter = NULL) {
		$line = $this->currentToken[2];
		$name = String::lower($this->parseName());
		if(isset($allowedAfter)) {
			$token = $this->getNextToken();
			if(isset($allowedAfter) && !$this->isAllowed($token, $allowedAfter)) {
				$this->returnToken($token);
				return;
			}
		}
		if(strlen($name) && FALSE === array_search(String::lower($name), $this->reserved)) {
			$this->fileInfo[$this->currentFile][$this->namespace][self::NS_USED_CLASS][$name] = $line;
		}
	}

	private function parseTypeHints() {
		$line = $this->currentToken[2];
		 // remove function name and reference, we don't need it
		$token = $this->getNextToken();
		while($this->isAllowed($token, array("&", T_STRING, T_WHITESPACE))) {
			$token = $this->getNextToken();
		}
		while (!$this->isAllowed($token, ")")) {
			$name = String::lower($this->parseName());
			if(strlen($name) && !String::startsWith($name, '$') && FALSE === array_search($name, $this->reserved)) {
				$this->fileInfo[$this->currentFile][$this->namespace][self::NS_USED_CLASS][$name] = $line;
			}
			while(!$this->isAllowed($token, array(",",")"))) {
				$token = $this->getNextToken();
			}
			if(!$this->isAllowed($token, ")")) {
				$token = $this->getNextToken();
				if($this->isAllowed($token, array(T_NS_SEPARATOR, T_STRING))) {
					$this->returnToken($token);
				}
			}
		}
	}

	private function parseCallback() {
		$line = $this->currentToken[2];
		if(String::match($this->currentToken[1], "/::/")) {
			$this->onOutput(self::OI_POSSIBLE_CALLBACK, array(
				self::FILE => $this->currentFile,
				self::LINE => $line,
				self::NAMESPACE_NAME => $this->namespace,
				self::VALUE => $this->currentToken[1],
			));
		}
	}

}
