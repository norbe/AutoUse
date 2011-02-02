<?php

// Start of Reflection v.$Revision: 293036 $

/**
 * The ReflectionException class.
 * @link http://php.net/manual/en/class.reflectionexception.php
 */
class ReflectionException extends Exception  {
	protected $message;
	protected $code;
	protected $file;
	protected $line;


	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Clone the exception
	 * @link http://php.net/manual/en/exception.clone.php
	 * @return void 
	 */
	final private function __clone () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Construct the exception
	 * @link http://php.net/manual/en/exception.construct.php
	 * @param $message [optional]
	 * @param $code [optional]
	 * @param $previous [optional]
	 */
	public function __construct ($message, $code, $previous) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the Exception message
	 * @link http://php.net/manual/en/exception.getmessage.php
	 * @return string the Exception message as a string.
	 */
	final public function getMessage () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the Exception code
	 * @link http://php.net/manual/en/exception.getcode.php
	 * @return int the Exception code as a integer.
	 */
	final public function getCode () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the file in which the exception occurred
	 * @link http://php.net/manual/en/exception.getfile.php
	 * @return string the filename in which the exception was thrown.
	 */
	final public function getFile () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the line in which the exception occurred
	 * @link http://php.net/manual/en/exception.getline.php
	 * @return int the line number where the exception was thrown.
	 */
	final public function getLine () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the stack trace
	 * @link http://php.net/manual/en/exception.gettrace.php
	 * @return array the Exception stack trace as an array.
	 */
	final public function getTrace () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns previous Exception
	 * @link http://php.net/manual/en/exception.getprevious.php
	 * @return Exception the previous Exception if available 
	 * or &null; otherwise.
	 */
	final public function getPrevious () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the stack trace as a string
	 * @link http://php.net/manual/en/exception.gettraceasstring.php
	 * @return string the Exception stack trace as a string.
	 */
	final public function getTraceAsString () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * String representation of the exception
	 * @link http://php.net/manual/en/exception.tostring.php
	 * @return string the string representation of the exception.
	 */
	public function __toString () {}

}

/**
 * The reflection class.
 * @link http://php.net/manual/en/class.reflection.php
 */
class Reflection  {

	/**
	 * (PHP 5)<br/>
	 * Gets modifier names
	 * @link http://php.net/manual/en/reflection.getmodifiernames.php
	 * @param int $modifiers <p>
	 * The modifiers to get, which is from a numeric value.
	 * </p>
	 * @return array An array of modifier names.
	 */
	public static function getModifierNames ($modifiers) {}

	/**
	 * (PHP 5)<br/>
	 * Exports
	 * @link http://php.net/manual/en/reflection.export.php
	 * @param Reflector $reflector <p>
	 * &reflection.export.param.name;
	 * </p>
	 * @param string $return [optional] <p>
	 * &reflection.export.param.return;
	 * </p>
	 * @return void &reflection.export.return;
	 */
	public static function export ($reflector, $return = null) {}

}

/**
 * Reflector is an interface implemented by all
 * exportable Reflection classes.
 * @link http://php.net/manual/en/class.reflector.php
 */
interface Reflector  {

	/**
	 * (PHP 5)<br/>
	 * Exports
	 * @link http://php.net/manual/en/reflector.export.php
	 * @return string 
	 */
	abstract public static function export () {}

	/**
	 * (PHP 5)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflector.tostring.php
	 * @return string 
	 */
	abstract public function __toString () {}

}

/**
 * A parent class to ReflectionFunction, read its
 * description for details.
 * @link http://php.net/manual/en/class.reflectionfunctionabstract.php
 */
class ReflectionFunctionAbstract implements Reflector {
	abstract public $name;


	/**
	 * (PHP 5)<br/>
	 * Clones function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
	 * @return void 
	 */
	final private function __clone () {}

	/**
	 * (PHP 5)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionfunctionabstract.tostring.php
	 * @return void The string.
	 */
	abstract public function __toString () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks if function in namespace
	 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
	 * @return bool true if it's in a namespace, otherwise false
	 */
	public function inNamespace () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks if closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
	 * @return bool true if it's a closure, otherwise false
	 */
	public function isClosure () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if deprecated
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
	 * @return bool true if it's deprecated, otherwise false
	 */
	public function isDeprecated () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if is internal
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
	 * @return bool true if it's internal, otherwise false
	 */
	public function isInternal () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
	 * @return bool true if it's user-defined, otherwise false;
	 */
	public function isUserDefined () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets doc comment
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise false
	 */
	public function getDocComment () {}

	/**
	 * (PHP 5)<br/>
	 * Gets end line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
	 * @return int The ending line number of the user defined class, or false if unknown.
	 */
	public function getEndLine () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension The extension information, as a ReflectionExtension object.
	 */
	public function getExtension () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
	 * @return string The extensions name.
	 */
	public function getExtensionName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets file name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
	 * @return string The file name.
	 */
	public function getFileName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets function name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
	 * @return string The name of the function.
	 */
	public function getName () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName () {}

	/**
	 * (PHP 5 &gt;= 5.0.3)<br/>
	 * Gets number of parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int The number of parameters.
	 */
	public function getNumberOfParameters () {}

	/**
	 * (PHP 5 &gt;= 5.0.3)<br/>
	 * Gets number of required parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int The number of required parameters.
	 */
	public function getNumberOfRequiredParameters () {}

	/**
	 * (PHP 5)<br/>
	 * Gets parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
	 * @return array The parameters, as a ReflectionParameter object.
	 */
	public function getParameters () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets function short name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
	 * @return string The short name of the function.
	 */
	public function getShortName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
	 * @return int The starting line number.
	 */
	public function getStartLine () {}

	/**
	 * (PHP 5)<br/>
	 * Gets static variables
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
	 * @return array An array of static variables.
	 */
	public function getStaticVariables () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if returns reference
	 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
	 * @return bool true if it returns a reference, otherwise false
	 */
	public function returnsReference () {}

}

/**
 * The ReflectionFunction class reports
 * information about a function.
 * @link http://php.net/manual/en/class.reflectionfunction.php
 */
class ReflectionFunction extends ReflectionFunctionAbstract implements Reflector {
	const IS_DEPRECATED = 262144;

	public $name;


	/**
	 * (PHP 5)<br/>
	 * Constructs a ReflectionFunction object
	 * @link http://php.net/manual/en/reflectionfunction.construct.php
	 * @param $name
	 */
	public function __construct ($name) {}

	/**
	 * (PHP 5)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionfunction.tostring.php
	 * @return string 
	 */
	public function __toString () {}

	/**
	 * (PHP 5)<br/>
	 * Exports function
	 * @link http://php.net/manual/en/reflectionfunction.export.php
	 * @param string $name <p>
	 * &reflection.export.param.name;
	 * </p>
	 * @param string $return [optional] <p>
	 * &reflection.export.param.return;
	 * </p>
	 * @return string &reflection.export.return;
	 */
	public static function export ($name, $return = null) {}

	/**
	 * (PHP 5)<br/>
	 * Checks if function is disabled
	 * @link http://php.net/manual/en/reflectionfunction.isdisabled.php
	 * @return bool true if it's disable, otherwise false
	 */
	public function isDisabled () {}

	/**
	 * (PHP 5)<br/>
	 * Invokes function
	 * @link http://php.net/manual/en/reflectionfunction.invoke.php
	 * @param string $args [optional] <p>
	 * The passed in argument list. It accepts a variable number of
	 * arguments which are passed to the function much like
	 * call_user_func is.
	 * </p>
	 * @return mixed 
	 */
	public function invoke ($args = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Invokes function args
	 * @link http://php.net/manual/en/reflectionfunction.invokeargs.php
	 * @param array $args <p>
	 * The args to invoke.
	 * </p>
	 * @return mixed 
	 */
	public function invokeArgs ($argsarray ) {}

	/**
	 * (PHP 5)<br/>
	 * Clones function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
	 * @return void 
	 */
	final private function __clone () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks if function in namespace
	 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
	 * @return bool true if it's in a namespace, otherwise false
	 */
	public function inNamespace () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks if closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
	 * @return bool true if it's a closure, otherwise false
	 */
	public function isClosure () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if deprecated
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
	 * @return bool true if it's deprecated, otherwise false
	 */
	public function isDeprecated () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if is internal
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
	 * @return bool true if it's internal, otherwise false
	 */
	public function isInternal () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
	 * @return bool true if it's user-defined, otherwise false;
	 */
	public function isUserDefined () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets doc comment
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise false
	 */
	public function getDocComment () {}

	/**
	 * (PHP 5)<br/>
	 * Gets end line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
	 * @return int The ending line number of the user defined class, or false if unknown.
	 */
	public function getEndLine () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension The extension information, as a ReflectionExtension object.
	 */
	public function getExtension () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
	 * @return string The extensions name.
	 */
	public function getExtensionName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets file name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
	 * @return string The file name.
	 */
	public function getFileName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets function name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
	 * @return string The name of the function.
	 */
	public function getName () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName () {}

	/**
	 * (PHP 5 &gt;= 5.0.3)<br/>
	 * Gets number of parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int The number of parameters.
	 */
	public function getNumberOfParameters () {}

	/**
	 * (PHP 5 &gt;= 5.0.3)<br/>
	 * Gets number of required parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int The number of required parameters.
	 */
	public function getNumberOfRequiredParameters () {}

	/**
	 * (PHP 5)<br/>
	 * Gets parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
	 * @return array The parameters, as a ReflectionParameter object.
	 */
	public function getParameters () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets function short name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
	 * @return string The short name of the function.
	 */
	public function getShortName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
	 * @return int The starting line number.
	 */
	public function getStartLine () {}

	/**
	 * (PHP 5)<br/>
	 * Gets static variables
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
	 * @return array An array of static variables.
	 */
	public function getStaticVariables () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if returns reference
	 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
	 * @return bool true if it returns a reference, otherwise false
	 */
	public function returnsReference () {}

}

/**
 * The ReflectionParameter class retrieves
 * information about a function's or method's parameters.
 * @link http://php.net/manual/en/class.reflectionparameter.php
 */
class ReflectionParameter implements Reflector {
	public $name;


	/**
	 * (PHP 5)<br/>
	 * Clone
	 * @link http://php.net/manual/en/reflectionparameter.clone.php
	 * @return void 
	 */
	final private function __clone () {}

	/**
	 * (PHP 5)<br/>
	 * Exports
	 * @link http://php.net/manual/en/reflectionparameter.export.php
	 * @param string $function <p>
	 * The function name.
	 * </p>
	 * @param string $parameter <p>
	 * The parameter name.
	 * </p>
	 * @param bool $return [optional] <p>
	 * &reflection.export.param.return; 
	 * </p>
	 * @return string The exported reflection.
	 */
	public static function export ($function, $parameter, $return = null) {}

	/**
	 * (PHP 5)<br/>
	 * Construct
	 * @link http://php.net/manual/en/reflectionparameter.construct.php
	 * @param $function
	 * @param $parameter
	 */
	public function __construct ($function, $parameter) {}

	/**
	 * (PHP 5)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionparameter.tostring.php
	 * @return string 
	 */
	public function __toString () {}

	/**
	 * (PHP 5)<br/>
	 * Gets parameter name
	 * @link http://php.net/manual/en/reflectionparameter.getname.php
	 * @return string The name of the reflected parameter.
	 */
	public function getName () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if passed by reference
	 * @link http://php.net/manual/en/reflectionparameter.ispassedbyreference.php
	 * @return bool true if the parameter is passed in by reference, otherwise false
	 */
	public function isPassedByReference () {}

	/**
	 * (PHP 5 &gt;= 5.2.3)<br/>
	 * Gets declaring function
	 * @link http://php.net/manual/en/reflectionparameter.getdeclaringfunction.php
	 * @return ReflectionFunction A ReflectionFunction object.
	 */
	public function getDeclaringFunction () {}

	/**
	 * (PHP 5)<br/>
	 * Gets declaring class
	 * @link http://php.net/manual/en/reflectionparameter.getdeclaringclass.php
	 * @return ReflectionClass A ReflectionClass object.
	 */
	public function getDeclaringClass () {}

	/**
	 * (PHP 5)<br/>
	 * Get class
	 * @link http://php.net/manual/en/reflectionparameter.getclass.php
	 * @return ReflectionClass A ReflectionClass object.
	 */
	public function getClass () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if parameter expects an array
	 * @link http://php.net/manual/en/reflectionparameter.isarray.php
	 * @return bool true if an array is expected, false otherwise.
	 */
	public function isArray () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if null is allowed
	 * @link http://php.net/manual/en/reflectionparameter.allowsnull.php
	 * @return bool true if &null; is allowed, otherwise false
	 */
	public function allowsNull () {}

	/**
	 * (PHP 5 &gt;= 5.2.3)<br/>
	 * Gets parameter position
	 * @link http://php.net/manual/en/reflectionparameter.getposition.php
	 * @return int The position of the parameter, left to right, starting at position #0.
	 */
	public function getPosition () {}

	/**
	 * (PHP 5 &gt;= 5.0.3)<br/>
	 * Checks if optional
	 * @link http://php.net/manual/en/reflectionparameter.isoptional.php
	 * @return bool true if the parameter is optional, otherwise false
	 */
	public function isOptional () {}

	/**
	 * (PHP 5 &gt;= 5.0.3)<br/>
	 * Checks if a default value is available
	 * @link http://php.net/manual/en/reflectionparameter.isdefaultvalueavailable.php
	 * @return bool true if a default value is available, otherwise false
	 */
	public function isDefaultValueAvailable () {}

	/**
	 * (PHP 5 &gt;= 5.0.3)<br/>
	 * Gets default parameter value
	 * @link http://php.net/manual/en/reflectionparameter.getdefaultvalue.php
	 * @return mixed The parameters default value.
	 */
	public function getDefaultValue () {}

}

/**
 * The ReflectionMethod class reports
 * information about a method.
 * @link http://php.net/manual/en/class.reflectionmethod.php
 */
class ReflectionMethod extends ReflectionFunctionAbstract implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;
	const IS_ABSTRACT = 2;
	const IS_FINAL = 4;

	public $name;
	public $class;


	/**
	 * (PHP 5)<br/>
	 * Export
	 * @link http://php.net/manual/en/reflectionmethod.export.php
	 * @param string $class <p>
	 * The class name.
	 * </p>
	 * @param string $name <p>
	 * The name of the method.
	 * </p>
	 * @param bool $return [optional] <p>
	 * &reflection.export.param.return;
	 * </p>
	 * @return string &reflection.export.return;
	 */
	public static function export ($class, $name, $return = null) {}

	/**
	 * (PHP 5)<br/>
	 * Constructs a ReflectionMethod
	 * @link http://php.net/manual/en/reflectionmethod.construct.php
	 * @param $class_or_method
	 * @param $name [optional]
	 */
	public function __construct ($class_or_method, $name) {}

	/**
	 * (PHP 5)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionmethod.tostring.php
	 * @return string 
	 */
	public function __toString () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if method is public
	 * @link http://php.net/manual/en/reflectionmethod.ispublic.php
	 * @return bool true if the method is public, otherwise false
	 */
	public function isPublic () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if method is private
	 * @link http://php.net/manual/en/reflectionmethod.isprivate.php
	 * @return bool true if the method is private, otherwise false
	 */
	public function isPrivate () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if method is protected
	 * @link http://php.net/manual/en/reflectionmethod.isprotected.php
	 * @return bool true if the method is protected, otherwise false
	 */
	public function isProtected () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if method is abstract
	 * @link http://php.net/manual/en/reflectionmethod.isabstract.php
	 * @return bool true if the method is abstract, otherwise false
	 */
	public function isAbstract () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if method is final
	 * @link http://php.net/manual/en/reflectionmethod.isfinal.php
	 * @return bool true if the method is final, otherwise false
	 */
	public function isFinal () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if method is static
	 * @link http://php.net/manual/en/reflectionmethod.isstatic.php
	 * @return bool true if the method is static, otherwise false
	 */
	public function isStatic () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if method is a constructor
	 * @link http://php.net/manual/en/reflectionmethod.isconstructor.php
	 * @return bool true if the method is a constructor, otherwise false
	 */
	public function isConstructor () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if method is a destructor
	 * @link http://php.net/manual/en/reflectionmethod.isdestructor.php
	 * @return bool true if the method is a destructor, otherwise false;
	 */
	public function isDestructor () {}

	/**
	 * (PHP 5)<br/>
	 * Gets modifiers
	 * @link http://php.net/manual/en/reflectionmethod.getmodifiers.php
	 * @return int A numeric representation of the modifiers.
	 */
	public function getModifiers () {}

	/**
	 * (PHP 5)<br/>
	 * Invoke
	 * @link http://php.net/manual/en/reflectionmethod.invoke.php
	 * @param object $object <p>
	 * The object to invoke.
	 * </p>
	 * @param string $args <p>
	 * The passed in argument list. It accepts a variable number of
	 * arguments which are passed to the function much like
	 * call_user_func is.
	 * </p>
	 * @return mixed 
	 */
	public function invoke ($object, $args) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Invoke args
	 * @link http://php.net/manual/en/reflectionmethod.invokeargs.php
	 * @param string $object <p>
	 * </p>
	 * @param array $args <p>
	 * </p>
	 * @return mixed 
	 */
	public function invokeArgs ($object, $argsarray ) {}

	/**
	 * (PHP 5)<br/>
	 * Gets declaring class
	 * @link http://php.net/manual/en/reflectionmethod.getdeclaringclass.php
	 * @return ReflectionClass A ReflectionClass.
	 */
	public function getDeclaringClass () {}

	/**
	 * (PHP 5)<br/>
	 * Gets prototype
	 * @link http://php.net/manual/en/reflectionmethod.getprototype.php
	 * @return void The prototype.
	 */
	public function getPrototype () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Set method accessibility
	 * @link http://php.net/manual/en/reflectionmethod.setaccessible.php
	 * @param bool $accessible <p>
	 * true to allow accessibility, or false.
	 * </p>
	 * @return void 
	 */
	public function setAccessible ($accessible) {}

	/**
	 * (PHP 5)<br/>
	 * Clones function
	 * @link http://php.net/manual/en/reflectionfunctionabstract.clone.php
	 * @return void 
	 */
	final private function __clone () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks if function in namespace
	 * @link http://php.net/manual/en/reflectionfunctionabstract.innamespace.php
	 * @return bool true if it's in a namespace, otherwise false
	 */
	public function inNamespace () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks if closure
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isclosure.php
	 * @return bool true if it's a closure, otherwise false
	 */
	public function isClosure () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if deprecated
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isdeprecated.php
	 * @return bool true if it's deprecated, otherwise false
	 */
	public function isDeprecated () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if is internal
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isinternal.php
	 * @return bool true if it's internal, otherwise false
	 */
	public function isInternal () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionfunctionabstract.isuserdefined.php
	 * @return bool true if it's user-defined, otherwise false;
	 */
	public function isUserDefined () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets doc comment
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise false
	 */
	public function getDocComment () {}

	/**
	 * (PHP 5)<br/>
	 * Gets end line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getendline.php
	 * @return int The ending line number of the user defined class, or false if unknown.
	 */
	public function getEndLine () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextension.php
	 * @return ReflectionExtension The extension information, as a ReflectionExtension object.
	 */
	public function getExtension () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getextensionname.php
	 * @return string The extensions name.
	 */
	public function getExtensionName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets file name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getfilename.php
	 * @return string The file name.
	 */
	public function getFileName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets function name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getname.php
	 * @return string The name of the function.
	 */
	public function getName () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName () {}

	/**
	 * (PHP 5 &gt;= 5.0.3)<br/>
	 * Gets number of parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofparameters.php
	 * @return int The number of parameters.
	 */
	public function getNumberOfParameters () {}

	/**
	 * (PHP 5 &gt;= 5.0.3)<br/>
	 * Gets number of required parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getnumberofrequiredparameters.php
	 * @return int The number of required parameters.
	 */
	public function getNumberOfRequiredParameters () {}

	/**
	 * (PHP 5)<br/>
	 * Gets parameters
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getparameters.php
	 * @return array The parameters, as a ReflectionParameter object.
	 */
	public function getParameters () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets function short name
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getshortname.php
	 * @return string The short name of the function.
	 */
	public function getShortName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstartline.php
	 * @return int The starting line number.
	 */
	public function getStartLine () {}

	/**
	 * (PHP 5)<br/>
	 * Gets static variables
	 * @link http://php.net/manual/en/reflectionfunctionabstract.getstaticvariables.php
	 * @return array An array of static variables.
	 */
	public function getStaticVariables () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if returns reference
	 * @link http://php.net/manual/en/reflectionfunctionabstract.returnsreference.php
	 * @return bool true if it returns a reference, otherwise false
	 */
	public function returnsReference () {}

}

/**
 * The ReflectionClass class reports
 * information about a class.
 * @link http://php.net/manual/en/class.reflectionclass.php
 */
class ReflectionClass implements Reflector {
	const IS_IMPLICIT_ABSTRACT = 16;
	const IS_EXPLICIT_ABSTRACT = 32;
	const IS_FINAL = 64;

	public $name;


	/**
	 * (PHP 5)<br/>
	 * Clones object
	 * @link http://php.net/manual/en/reflectionclass.clone.php
	 * @return void 
	 */
	final private function __clone () {}

	/**
	 * (PHP 5)<br/>
	 * Exports a class
	 * @link http://php.net/manual/en/reflectionclass.export.php
	 * @param mixed $argument <p>
	 * &reflection.export.param.name;
	 * </p>
	 * @param bool $return [optional] <p>
	 * &reflection.export.param.return;
	 * </p>
	 * @return string &reflection.export.return;
	 */
	public static function export ($argument, $return = null) {}

	/**
	 * (PHP 5)<br/>
	 * Constructs a ReflectionClass
	 * @link http://php.net/manual/en/reflectionclass.construct.php
	 * @param $argument
	 */
	public function __construct ($argument) {}

	/**
	 * (PHP 5)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionclass.tostring.php
	 * @return string 
	 */
	public function __toString () {}

	/**
	 * (PHP 5)<br/>
	 * Gets class name
	 * @link http://php.net/manual/en/reflectionclass.getname.php
	 * @return string The class name.
	 */
	public function getName () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if internal
	 * @link http://php.net/manual/en/reflectionclass.isinternal.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isInternal () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionclass.isuserdefined.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isUserDefined () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if instantiable
	 * @link http://php.net/manual/en/reflectionclass.isinstantiable.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isInstantiable () {}

	/**
	 * (PHP 5)<br/>
	 * Gets a filename
	 * @link http://php.net/manual/en/reflectionclass.getfilename.php
	 * @return string The filename.
	 */
	public function getFileName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionclass.getstartline.php
	 * @return int The starting line number, as an integer.
	 */
	public function getStartLine () {}

	/**
	 * (PHP 5)<br/>
	 * Gets end line
	 * @link http://php.net/manual/en/reflectionclass.getendline.php
	 * @return int The ending line number of the user defined class, or false if unknown.
	 */
	public function getEndLine () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets doc comments
	 * @link http://php.net/manual/en/reflectionclass.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise false
	 */
	public function getDocComment () {}

	/**
	 * (PHP 5)<br/>
	 * Gets constructor
	 * @link http://php.net/manual/en/reflectionclass.getconstructor.php
	 * @return object A ReflectionMethod object.
	 */
	public function getConstructor () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if method is defined
	 * @link http://php.net/manual/en/reflectionclass.hasmethod.php
	 * @param string $name <p>
	 * Name of the method being checked for.
	 * </p>
	 * @return bool true if it has the method, otherwise false
	 */
	public function hasMethod ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets a ReflectionMethod
	 * @link http://php.net/manual/en/reflectionclass.getmethod.php
	 * @param string $name <p>
	 * The method name to reflect.
	 * </p>
	 * @return object A ReflectionMethod.
	 */
	public function getMethod ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets a list of methods
	 * @link http://php.net/manual/en/reflectionclass.getmethods.php
	 * @param string $filter [optional] <p>
	 * Any combination of ReflectionMethod::IS_STATIC,
	 * ReflectionMethod::IS_PUBLIC,
	 * ReflectionMethod::IS_PROTECTED,
	 * ReflectionMethod::IS_PRIVATE,
	 * ReflectionMethod::IS_ABSTRACT,
	 * ReflectionMethod::IS_FINAL.
	 * </p>
	 * @return array An array of methods.
	 */
	public function getMethods ($filter = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if property is defined
	 * @link http://php.net/manual/en/reflectionclass.hasproperty.php
	 * @param string $name <p>
	 * Name of the property being checked for.
	 * </p>
	 * @return bool true if it has the property, otherwise false
	 */
	public function hasProperty ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets property
	 * @link http://php.net/manual/en/reflectionclass.getproperty.php
	 * @param string $name <p>
	 * The property name.
	 * </p>
	 * @return ReflectionProperty A ReflectionProperty.
	 */
	public function getProperty ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets properties
	 * @link http://php.net/manual/en/reflectionclass.getproperties.php
	 * @param string $filter [optional] <p>
	 * The optional filter.
	 * </p>
	 * @return ReflectionProperty A ReflectionProperty.
	 */
	public function getProperties ($filter = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if constant is defined
	 * @link http://php.net/manual/en/reflectionclass.hasconstant.php
	 * @param string $name <p>
	 * The name of the constant being checked for.
	 * </p>
	 * @return bool true if the constant is defined, otherwise false.
	 */
	public function hasConstant ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets constants
	 * @link http://php.net/manual/en/reflectionclass.getconstants.php
	 * @return array An array of constants.
	 */
	public function getConstants () {}

	/**
	 * (PHP 5)<br/>
	 * Gets defined constants
	 * @link http://php.net/manual/en/reflectionclass.getconstant.php
	 * @param string $name <p>
	 * </p>
	 * @return mixed 
	 */
	public function getConstant ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets the interfaces
	 * @link http://php.net/manual/en/reflectionclass.getinterfaces.php
	 * @return array An associative array of interfaces, with keys as interface
	 * names and the array values as ReflectionClass objects.
	 */
	public function getInterfaces () {}

	/**
	 * (PHP 5)<br/>
	 * Gets the interface names
	 * @link http://php.net/manual/en/reflectionclass.getinterfacenames.php
	 * @return array A numerical array with interface names as the values.
	 */
	public function getInterfaceNames () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if interface
	 * @link http://php.net/manual/en/reflectionclass.isinterface.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isInterface () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if class is abstract
	 * @link http://php.net/manual/en/reflectionclass.isabstract.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isAbstract () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if class is final
	 * @link http://php.net/manual/en/reflectionclass.isfinal.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isFinal () {}

	/**
	 * (PHP 5)<br/>
	 * Gets modifiers
	 * @link http://php.net/manual/en/reflectionclass.getmodifiers.php
	 * @return int 
	 */
	public function getModifiers () {}

	/**
	 * (PHP 5)<br/>
	 * Checks class for instance
	 * @link http://php.net/manual/en/reflectionclass.isinstance.php
	 * @param object $object <p>
	 * The object being compared to.
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function isInstance ($object) {}

	/**
	 * (PHP 5)<br/>
	 * New instance
	 * @link http://php.net/manual/en/reflectionclass.newinstance.php
	 * @param mixed $args <p>
	 * Accepts a variable number of arguments which are passed to the function
	 * much like call_user_func.
	 * </p>
	 * @param mixed $_ [optional] 
	 * @return object 
	 */
	public function newInstance ($args, $_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.3)<br/>
	 * New instance args
	 * @link http://php.net/manual/en/reflectionclass.newinstanceargs.php
	 * @param array $args [optional] <p>
	 * </p>
	 * @return object 
	 */
	public function newInstanceArgs ($args = nullarray ) {}

	/**
	 * (PHP 5)<br/>
	 * Gets parent class
	 * @link http://php.net/manual/en/reflectionclass.getparentclass.php
	 * @return object A ReflectionClass.
	 */
	public function getParentClass () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if a subclass
	 * @link http://php.net/manual/en/reflectionclass.issubclassof.php
	 * @param string $class <p>
	 * The class name being checked against.
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function isSubclassOf ($class) {}

	/**
	 * (PHP 5)<br/>
	 * Gets static properties
	 * @link http://php.net/manual/en/reflectionclass.getstaticproperties.php
	 * @return array The static properties, as an array.
	 */
	public function getStaticProperties () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets static property value
	 * @link http://php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
	 * @param string $name <p>
	 * </p>
	 * @param string $default [optional] <p>
	 * </p>
	 * @return mixed 
	 */
	public function getStaticPropertyValue ($name, $default = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Sets static property value
	 * @link http://php.net/manual/en/reflectionclass.setstaticpropertyvalue.php
	 * @param string $name <p>
	 * Property name.
	 * </p>
	 * @param string $value <p>
	 * New property value.
	 * </p>
	 * @return void 
	 */
	public function setStaticPropertyValue ($name, $value) {}

	/**
	 * (PHP 5)<br/>
	 * Gets default properties
	 * @link http://php.net/manual/en/reflectionclass.getdefaultproperties.php
	 * @return array An array of default properties.
	 */
	public function getDefaultProperties () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if iterateable
	 * @link http://php.net/manual/en/reflectionclass.isiterateable.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isIterateable () {}

	/**
	 * (PHP 5)<br/>
	 * Implements interface
	 * @link http://php.net/manual/en/reflectionclass.implementsinterface.php
	 * @param string $interface <p>
	 * The interface name.
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function implementsInterface ($interface) {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionclass.getextension.php
	 * @return ReflectionExtension A ReflectionExtension object.
	 */
	public function getExtension () {}

	/**
	 * (PHP 5)<br/>
	 * Gets an extensions name
	 * @link http://php.net/manual/en/reflectionclass.getextensionname.php
	 * @return string The extensions name.
	 */
	public function getExtensionName () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks if in namespace
	 * @link http://php.net/manual/en/reflectionclass.innamespace.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function inNamespace () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionclass.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets short name
	 * @link http://php.net/manual/en/reflectionclass.getshortname.php
	 * @return string The class short name.
	 */
	public function getShortName () {}

}

/**
 * The ReflectionObject class reports
 * information about an object.
 * @link http://php.net/manual/en/class.reflectionobject.php
 */
class ReflectionObject extends ReflectionClass implements Reflector {
	const IS_IMPLICIT_ABSTRACT = 16;
	const IS_EXPLICIT_ABSTRACT = 32;
	const IS_FINAL = 64;

	public $name;


	/**
	 * (PHP 5)<br/>
	 * Export
	 * @link http://php.net/manual/en/reflectionobject.export.php
	 * @param string $argument <p>
	 * &reflection.export.param.name; 
	 * </p>
	 * @param bool $return [optional] <p>
	 * &reflection.export.param.return; 
	 * </p>
	 * @return string &reflection.export.return;
	 */
	public static function export ($argument, $return = null) {}

	/**
	 * (PHP 5)<br/>
	 * Constructs a ReflectionObject
	 * @link http://php.net/manual/en/reflectionobject.construct.php
	 * @param $argument
	 */
	public function __construct ($argument) {}

	/**
	 * (PHP 5)<br/>
	 * Clones object
	 * @link http://php.net/manual/en/reflectionclass.clone.php
	 * @return void 
	 */
	final private function __clone () {}

	/**
	 * (PHP 5)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionclass.tostring.php
	 * @return string 
	 */
	public function __toString () {}

	/**
	 * (PHP 5)<br/>
	 * Gets class name
	 * @link http://php.net/manual/en/reflectionclass.getname.php
	 * @return string The class name.
	 */
	public function getName () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if internal
	 * @link http://php.net/manual/en/reflectionclass.isinternal.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isInternal () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if user defined
	 * @link http://php.net/manual/en/reflectionclass.isuserdefined.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isUserDefined () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if instantiable
	 * @link http://php.net/manual/en/reflectionclass.isinstantiable.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isInstantiable () {}

	/**
	 * (PHP 5)<br/>
	 * Gets a filename
	 * @link http://php.net/manual/en/reflectionclass.getfilename.php
	 * @return string The filename.
	 */
	public function getFileName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets starting line number
	 * @link http://php.net/manual/en/reflectionclass.getstartline.php
	 * @return int The starting line number, as an integer.
	 */
	public function getStartLine () {}

	/**
	 * (PHP 5)<br/>
	 * Gets end line
	 * @link http://php.net/manual/en/reflectionclass.getendline.php
	 * @return int The ending line number of the user defined class, or false if unknown.
	 */
	public function getEndLine () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets doc comments
	 * @link http://php.net/manual/en/reflectionclass.getdoccomment.php
	 * @return string The doc comment if it exists, otherwise false
	 */
	public function getDocComment () {}

	/**
	 * (PHP 5)<br/>
	 * Gets constructor
	 * @link http://php.net/manual/en/reflectionclass.getconstructor.php
	 * @return object A ReflectionMethod object.
	 */
	public function getConstructor () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if method is defined
	 * @link http://php.net/manual/en/reflectionclass.hasmethod.php
	 * @param string $name <p>
	 * Name of the method being checked for.
	 * </p>
	 * @return bool true if it has the method, otherwise false
	 */
	public function hasMethod ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets a ReflectionMethod
	 * @link http://php.net/manual/en/reflectionclass.getmethod.php
	 * @param string $name <p>
	 * The method name to reflect.
	 * </p>
	 * @return object A ReflectionMethod.
	 */
	public function getMethod ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets a list of methods
	 * @link http://php.net/manual/en/reflectionclass.getmethods.php
	 * @param string $filter [optional] <p>
	 * Any combination of ReflectionMethod::IS_STATIC,
	 * ReflectionMethod::IS_PUBLIC,
	 * ReflectionMethod::IS_PROTECTED,
	 * ReflectionMethod::IS_PRIVATE,
	 * ReflectionMethod::IS_ABSTRACT,
	 * ReflectionMethod::IS_FINAL.
	 * </p>
	 * @return array An array of methods.
	 */
	public function getMethods ($filter = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if property is defined
	 * @link http://php.net/manual/en/reflectionclass.hasproperty.php
	 * @param string $name <p>
	 * Name of the property being checked for.
	 * </p>
	 * @return bool true if it has the property, otherwise false
	 */
	public function hasProperty ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets property
	 * @link http://php.net/manual/en/reflectionclass.getproperty.php
	 * @param string $name <p>
	 * The property name.
	 * </p>
	 * @return ReflectionProperty A ReflectionProperty.
	 */
	public function getProperty ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets properties
	 * @link http://php.net/manual/en/reflectionclass.getproperties.php
	 * @param string $filter [optional] <p>
	 * The optional filter.
	 * </p>
	 * @return ReflectionProperty A ReflectionProperty.
	 */
	public function getProperties ($filter = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if constant is defined
	 * @link http://php.net/manual/en/reflectionclass.hasconstant.php
	 * @param string $name <p>
	 * The name of the constant being checked for.
	 * </p>
	 * @return bool true if the constant is defined, otherwise false.
	 */
	public function hasConstant ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets constants
	 * @link http://php.net/manual/en/reflectionclass.getconstants.php
	 * @return array An array of constants.
	 */
	public function getConstants () {}

	/**
	 * (PHP 5)<br/>
	 * Gets defined constants
	 * @link http://php.net/manual/en/reflectionclass.getconstant.php
	 * @param string $name <p>
	 * </p>
	 * @return mixed 
	 */
	public function getConstant ($name) {}

	/**
	 * (PHP 5)<br/>
	 * Gets the interfaces
	 * @link http://php.net/manual/en/reflectionclass.getinterfaces.php
	 * @return array An associative array of interfaces, with keys as interface
	 * names and the array values as ReflectionClass objects.
	 */
	public function getInterfaces () {}

	/**
	 * (PHP 5)<br/>
	 * Gets the interface names
	 * @link http://php.net/manual/en/reflectionclass.getinterfacenames.php
	 * @return array A numerical array with interface names as the values.
	 */
	public function getInterfaceNames () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if interface
	 * @link http://php.net/manual/en/reflectionclass.isinterface.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isInterface () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if class is abstract
	 * @link http://php.net/manual/en/reflectionclass.isabstract.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isAbstract () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if class is final
	 * @link http://php.net/manual/en/reflectionclass.isfinal.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isFinal () {}

	/**
	 * (PHP 5)<br/>
	 * Gets modifiers
	 * @link http://php.net/manual/en/reflectionclass.getmodifiers.php
	 * @return int 
	 */
	public function getModifiers () {}

	/**
	 * (PHP 5)<br/>
	 * Checks class for instance
	 * @link http://php.net/manual/en/reflectionclass.isinstance.php
	 * @param object $object <p>
	 * The object being compared to.
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function isInstance ($object) {}

	/**
	 * (PHP 5)<br/>
	 * New instance
	 * @link http://php.net/manual/en/reflectionclass.newinstance.php
	 * @param mixed $args <p>
	 * Accepts a variable number of arguments which are passed to the function
	 * much like call_user_func.
	 * </p>
	 * @param mixed $_ [optional] 
	 * @return object 
	 */
	public function newInstance ($args, $_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.3)<br/>
	 * New instance args
	 * @link http://php.net/manual/en/reflectionclass.newinstanceargs.php
	 * @param array $args [optional] <p>
	 * </p>
	 * @return object 
	 */
	public function newInstanceArgs ($args = nullarray ) {}

	/**
	 * (PHP 5)<br/>
	 * Gets parent class
	 * @link http://php.net/manual/en/reflectionclass.getparentclass.php
	 * @return object A ReflectionClass.
	 */
	public function getParentClass () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if a subclass
	 * @link http://php.net/manual/en/reflectionclass.issubclassof.php
	 * @param string $class <p>
	 * The class name being checked against.
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function isSubclassOf ($class) {}

	/**
	 * (PHP 5)<br/>
	 * Gets static properties
	 * @link http://php.net/manual/en/reflectionclass.getstaticproperties.php
	 * @return array The static properties, as an array.
	 */
	public function getStaticProperties () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets static property value
	 * @link http://php.net/manual/en/reflectionclass.getstaticpropertyvalue.php
	 * @param string $name <p>
	 * </p>
	 * @param string $default [optional] <p>
	 * </p>
	 * @return mixed 
	 */
	public function getStaticPropertyValue ($name, $default = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Sets static property value
	 * @link http://php.net/manual/en/reflectionclass.setstaticpropertyvalue.php
	 * @param string $name <p>
	 * Property name.
	 * </p>
	 * @param string $value <p>
	 * New property value.
	 * </p>
	 * @return void 
	 */
	public function setStaticPropertyValue ($name, $value) {}

	/**
	 * (PHP 5)<br/>
	 * Gets default properties
	 * @link http://php.net/manual/en/reflectionclass.getdefaultproperties.php
	 * @return array An array of default properties.
	 */
	public function getDefaultProperties () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if iterateable
	 * @link http://php.net/manual/en/reflectionclass.isiterateable.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function isIterateable () {}

	/**
	 * (PHP 5)<br/>
	 * Implements interface
	 * @link http://php.net/manual/en/reflectionclass.implementsinterface.php
	 * @param string $interface <p>
	 * The interface name.
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function implementsInterface ($interface) {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionclass.getextension.php
	 * @return ReflectionExtension A ReflectionExtension object.
	 */
	public function getExtension () {}

	/**
	 * (PHP 5)<br/>
	 * Gets an extensions name
	 * @link http://php.net/manual/en/reflectionclass.getextensionname.php
	 * @return string The extensions name.
	 */
	public function getExtensionName () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks if in namespace
	 * @link http://php.net/manual/en/reflectionclass.innamespace.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function inNamespace () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets namespace name
	 * @link http://php.net/manual/en/reflectionclass.getnamespacename.php
	 * @return string The namespace name.
	 */
	public function getNamespaceName () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets short name
	 * @link http://php.net/manual/en/reflectionclass.getshortname.php
	 * @return string The class short name.
	 */
	public function getShortName () {}

}

/**
 * The ReflectionProperty class reports
 * information about a classes properties.
 * @link http://php.net/manual/en/class.reflectionproperty.php
 */
class ReflectionProperty implements Reflector {
	const IS_STATIC = 1;
	const IS_PUBLIC = 256;
	const IS_PROTECTED = 512;
	const IS_PRIVATE = 1024;

	public $name;
	public $class;


	/**
	 * (PHP 5)<br/>
	 * Clone
	 * @link http://php.net/manual/en/reflectionproperty.clone.php
	 * @return void 
	 */
	final private function __clone () {}

	/**
	 * (PHP 5)<br/>
	 * Export
	 * @link http://php.net/manual/en/reflectionproperty.export.php
	 * @param mixed $class 
	 * @param string $name <p>
	 * The property name.
	 * </p>
	 * @param bool $return [optional] <p>
	 * &reflection.export.param.return; 
	 * </p>
	 * @return string 
	 */
	public static function export ($class, $name, $return = null) {}

	/**
	 * (PHP 5)<br/>
	 * Construct a ReflectionProperty object
	 * @link http://php.net/manual/en/reflectionproperty.construct.php
	 * @param $class [optional]
	 * @param $name [optional]
	 */
	public function __construct ($class, $name) {}

	/**
	 * (PHP 5)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionproperty.tostring.php
	 * @return string 
	 */
	public function __toString () {}

	/**
	 * (PHP 5)<br/>
	 * Gets property name
	 * @link http://php.net/manual/en/reflectionproperty.getname.php
	 * @return string The name of the reflected property.
	 */
	public function getName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets value
	 * @link http://php.net/manual/en/reflectionproperty.getvalue.php
	 * @param string $object [optional] <p>
	 * The object being reflected.
	 * </p>
	 * @return mixed The current value of the property.
	 */
	public function getValue ($object = null) {}

	/**
	 * (PHP 5)<br/>
	 * Set property value
	 * @link http://php.net/manual/en/reflectionproperty.setvalue.php
	 * @param object $object <p>
	 * The object name.
	 * </p>
	 * @param mixed $value <p>
	 * The new value.
	 * </p>
	 * @return void 
	 */
	public function setValue ($object, $value) {}

	/**
	 * (PHP 5)<br/>
	 * Checks if property is public
	 * @link http://php.net/manual/en/reflectionproperty.ispublic.php
	 * @return bool true if the property is public, false otherwise.
	 */
	public function isPublic () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if property is private
	 * @link http://php.net/manual/en/reflectionproperty.isprivate.php
	 * @return bool true if the property is private, false otherwise.
	 */
	public function isPrivate () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if property is protected
	 * @link http://php.net/manual/en/reflectionproperty.isprotected.php
	 * @return bool true if the property is protected, false otherwise.
	 */
	public function isProtected () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if property is static
	 * @link http://php.net/manual/en/reflectionproperty.isstatic.php
	 * @return bool true if the property is static, false otherwise.
	 */
	public function isStatic () {}

	/**
	 * (PHP 5)<br/>
	 * Checks if default value
	 * @link http://php.net/manual/en/reflectionproperty.isdefault.php
	 * @return bool true if the property was declared at compile-time, or false if
	 * it was created at run-time.
	 */
	public function isDefault () {}

	/**
	 * (PHP 5)<br/>
	 * Gets modifiers
	 * @link http://php.net/manual/en/reflectionproperty.getmodifiers.php
	 * @return int A numeric representation of the modifiers.
	 */
	public function getModifiers () {}

	/**
	 * (PHP 5)<br/>
	 * Gets declaring class
	 * @link http://php.net/manual/en/reflectionproperty.getdeclaringclass.php
	 * @return ReflectionClass A ReflectionClass object.
	 */
	public function getDeclaringClass () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets doc comment
	 * @link http://php.net/manual/en/reflectionproperty.getdoccomment.php
	 * @return string The doc comment.
	 */
	public function getDocComment () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Set property accessibility
	 * @link http://php.net/manual/en/reflectionproperty.setaccessible.php
	 * @param bool $accessible <p>
	 * true to allow accessibility, or false.
	 * </p>
	 * @return void 
	 */
	public function setAccessible ($accessible) {}

}

/**
 * The ReflectionExtension class reports
 * information about an extension.
 * @link http://php.net/manual/en/class.reflectionextension.php
 */
class ReflectionExtension implements Reflector {
	public $name;


	/**
	 * (PHP 5)<br/>
	 * Clones
	 * @link http://php.net/manual/en/reflectionextension.clone.php
	 * @return void 
	 */
	final private function __clone () {}

	/**
	 * (PHP 5)<br/>
	 * Export
	 * @link http://php.net/manual/en/reflectionextension.export.php
	 * @param string $name <p>
	 * &reflection.export.param.name;
	 * </p>
	 * @param string $return [optional] <p>
	 * &reflection.export.param.return;
	 * </p>
	 * @return string &reflection.export.return;
	 */
	public static function export ($name, $return = null) {}

	/**
	 * (PHP 5)<br/>
	 * Constructs a ReflectionExtension
	 * @link http://php.net/manual/en/reflectionextension.construct.php
	 * @param $name
	 */
	public function __construct ($name) {}

	/**
	 * (PHP 5)<br/>
	 * To string
	 * @link http://php.net/manual/en/reflectionextension.tostring.php
	 * @return string A string.
	 */
	public function __toString () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension name
	 * @link http://php.net/manual/en/reflectionextension.getname.php
	 * @return string The extensions name.
	 */
	public function getName () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension version
	 * @link http://php.net/manual/en/reflectionextension.getversion.php
	 * @return string The version of the extension.
	 */
	public function getVersion () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension functions
	 * @link http://php.net/manual/en/reflectionextension.getfunctions.php
	 * @return array An associative array of ReflectionFunction objects, 
	 * for each function defined in the extension with the keys being the function
	 * names. If no function are defined, an empty array is returned.
	 */
	public function getFunctions () {}

	/**
	 * (PHP 5)<br/>
	 * Gets constants
	 * @link http://php.net/manual/en/reflectionextension.getconstants.php
	 * @return array An associative array with constant names as keys.
	 */
	public function getConstants () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension ini entries
	 * @link http://php.net/manual/en/reflectionextension.getinientries.php
	 * @return array An associative array with the ini entries as keys,
	 * with their defined values as values.
	 */
	public function getINIEntries () {}

	/**
	 * (PHP 5)<br/>
	 * Gets classes
	 * @link http://php.net/manual/en/reflectionextension.getclasses.php
	 * @return array An array of ReflectionClass objects, one
	 * for each class within the extension. If no classes are defined,
	 * an empty array is returned.
	 */
	public function getClasses () {}

	/**
	 * (PHP 5)<br/>
	 * Gets class names
	 * @link http://php.net/manual/en/reflectionextension.getclassnames.php
	 * @return array An array of class names, as defined in the extension.
	 * If no classes are defined, an empty array is returned.
	 */
	public function getClassNames () {}

	/**
	 * (PHP 5)<br/>
	 * Gets dependencies
	 * @link http://php.net/manual/en/reflectionextension.getdependencies.php
	 * @return array An associative array with dependencies as keys and
	 * either Required or Conflicts
	 * as the values.
	 */
	public function getDependencies () {}

	/**
	 * (PHP 5)<br/>
	 * Gets extension info
	 * @link http://php.net/manual/en/reflectionextension.info.php
	 * @return string Information about the extension.
	 */
	public function info () {}

}
// End of Reflection v.$Revision: 293036 $
?>
