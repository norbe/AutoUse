<?php

// Start of SPL v.0.2

/**
 * Exception thrown if a logic expression is invalid
 * @link http://php.net/manual/en/class.logicexception.php
 */
class LogicException extends Exception  {
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
 * Exception thrown if a callback refers to an undefined function or if some arguments are missing
 * @link http://php.net/manual/en/class.badfunctioncallexception.php
 */
class BadFunctionCallException extends LogicException  {
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
 * Exception thrown if a callback refers to an undefined method or if some arguments are missing
 * @link http://php.net/manual/en/class.badmethodcallexception.php
 */
class BadMethodCallException extends BadFunctionCallException  {
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
 * Exception thrown if a value does not adhere to a defined valid data domain
 * @link http://php.net/manual/en/class.domainexception.php
 */
class DomainException extends LogicException  {
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
 * Exception thrown if an argument does not match with the expected value
 * @link http://php.net/manual/en/class.invalidargumentexception.php
 */
class InvalidArgumentException extends LogicException  {
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
 * Exception thrown if a length is invalid
 * @link http://php.net/manual/en/class.lengthexception.php
 */
class LengthException extends LogicException  {
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
 * Exception thrown when a value does not match with a range
 * @link http://php.net/manual/en/class.outofrangeexception.php
 */
class OutOfRangeException extends LogicException  {
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
 * Exception thrown if an error which can only be found on runtime occurs
 * @link http://php.net/manual/en/class.runtimeexception.php
 */
class RuntimeException extends Exception  {
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
 * Exception thrown if a value is not a valid key
 * @link http://php.net/manual/en/class.outofboundsexception.php
 */
class OutOfBoundsException extends RuntimeException  {
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
 * Exception thrown when you add an element into a full container
 * @link http://php.net/manual/en/class.overflowexception.php
 */
class OverflowException extends RuntimeException  {
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
 * Exception thrown when an invalid range is given.
 * @link http://php.net/manual/en/class.rangeexception.php
 */
class RangeException extends RuntimeException  {
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
 * Exception thrown when you try to remove an element of an empty container
 * @link http://php.net/manual/en/class.underflowexception.php
 */
class UnderflowException extends RuntimeException  {
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
 * Exception thrown if a value does not match with a set of values
 * @link http://php.net/manual/en/class.unexpectedvalueexception.php
 */
class UnexpectedValueException extends RuntimeException  {
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
 * Classes implementing RecursiveIterator can be used to iterate
 * over iterators recursively.
 * @link http://php.net/manual/en/class.recursiveiterator.php
 */
interface RecursiveIterator extends Iterator, Traversable {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns if an iterator can be created fot the current entry.
	 * @link http://php.net/manual/en/recursiveiterator.haschildren.php
	 * @return bool true if the current entry can be iterated over, otherwise returns false.
	 */
	abstract public function hasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns an iterator for the current entry.
	 * @link http://php.net/manual/en/recursiveiterator.getchildren.php
	 * @return RecursiveIterator An iterator for the current entry.
	 */
	abstract public function getChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the current element
	 * @link http://php.net/manual/en/iterator.current.php
	 * @return mixed Can return any type.
	 */
	abstract public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move forward to next element
	 * @link http://php.net/manual/en/iterator.next.php
	 * @return void Any returned value is ignored.
	 */
	abstract public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the key of the current element
	 * @link http://php.net/manual/en/iterator.key.php
	 * @return scalar scalar on success, integer
	 * 0 on failure.
	 */
	abstract public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if current position is valid
	 * @link http://php.net/manual/en/iterator.valid.php
	 * @return boolean The return value will be casted to boolean and then evaluated.
	 * Returns true on success or false on failure.
	 */
	abstract public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the Iterator to the first element
	 * @link http://php.net/manual/en/iterator.rewind.php
	 * @return void Any returned value is ignored.
	 */
	abstract public function rewind () {}

}

/**
 * Can be used to iterate through recursive iterators.
 * @link http://php.net/manual/en/class.recursiveiteratoriterator.php
 */
class RecursiveIteratorIterator implements Iterator, Traversable, OuterIterator {
	const LEAVES_ONLY = 0;
	const SELF_FIRST = 1;
	const CHILD_FIRST = 2;
	const CATCH_GET_CHILD = 16;


	/**
	 * (PHP 5 &gt;= 5.1.3)<br/>
	 * Construct a RecursiveIteratorIterator
	 * @link http://php.net/manual/en/recursiveiteratoriterator.construct.php
	 * @param Traversable $iterator
	 * @param $mode [optional]
	 * @param $flags [optional]
	 */
	public function __construct (Traversable $iterator, $mode, $flags) {}

	/**
	 * (PHP 5)<br/>
	 * Rewind the iterator to the first element of the top level inner iterator
	 * @link http://php.net/manual/en/recursiveiteratoriterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5)<br/>
	 * Check whether the current position is valid
	 * @link http://php.net/manual/en/recursiveiteratoriterator.valid.php
	 * @return bool true if the current position is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5)<br/>
	 * Access the current key
	 * @link http://php.net/manual/en/recursiveiteratoriterator.key.php
	 * @return mixed The current key.
	 */
	public function key () {}

	/**
	 * (PHP 5)<br/>
	 * Access the current element value
	 * @link http://php.net/manual/en/recursiveiteratoriterator.current.php
	 * @return mixed The current elements value.
	 */
	public function current () {}

	/**
	 * (PHP 5)<br/>
	 * Move forward to the next element
	 * @link http://php.net/manual/en/recursiveiteratoriterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5)<br/>
	 * Get the current depth of the recursive iteration
	 * @link http://php.net/manual/en/recursiveiteratoriterator.getdepth.php
	 * @return int The current depth of the recursive iteration.
	 */
	public function getDepth () {}

	/**
	 * (PHP 5)<br/>
	 * The current active sub iterator
	 * @link http://php.net/manual/en/recursiveiteratoriterator.getsubiterator.php
	 * @param $level [optional]
	 * @return RecursiveIterator The current active sub iterator.
	 */
	public function getSubIterator ($level) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get inner iterator
	 * @link http://php.net/manual/en/recursiveiteratoriterator.getinneriterator.php
	 * @return iterator The current active sub iterator.
	 */
	public function getInnerIterator () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Begin Iteration
	 * @link http://php.net/manual/en/recursiveiteratoriterator.beginiteration.php
	 * @return void 
	 */
	public function beginIteration () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * End Iteration
	 * @link http://php.net/manual/en/recursiveiteratoriterator.enditeration.php
	 * @return void 
	 */
	public function endIteration () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Has children
	 * @link http://php.net/manual/en/recursiveiteratoriterator.callhaschildren.php
	 * @return bool true if the element has children, otherwise false
	 */
	public function callHasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get children
	 * @link http://php.net/manual/en/recursiveiteratoriterator.callgetchildren.php
	 * @return RecursiveIterator A RecursiveIterator.
	 */
	public function callGetChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Begin children
	 * @link http://php.net/manual/en/recursiveiteratoriterator.beginchildren.php
	 * @return void 
	 */
	public function beginChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * End children
	 * @link http://php.net/manual/en/recursiveiteratoriterator.endchildren.php
	 * @return void 
	 */
	public function endChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Next element
	 * @link http://php.net/manual/en/recursiveiteratoriterator.nextelement.php
	 * @return void 
	 */
	public function nextElement () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Set max depth
	 * @link http://php.net/manual/en/recursiveiteratoriterator.setmaxdepth.php
	 * @param string $max_depth [optional] <p>
	 * The maximum allowed depth. -1 is used
	 * for any depth.
	 * </p>
	 * @return void 
	 */
	public function setMaxDepth ($max_depth = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get max depth
	 * @link http://php.net/manual/en/recursiveiteratoriterator.getmaxdepth.php
	 * @return mixed The maximum accepted depth, or false if any depth is allowed.
	 */
	public function getMaxDepth () {}

}

/**
 * Classes implementing OuterIterator can be used to iterate
 * over iterators.
 * @link http://php.net/manual/en/class.outeriterator.php
 */
interface OuterIterator extends Iterator, Traversable {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns the inner iterator for the current entry.
	 * @link http://php.net/manual/en/outeriterator.getchildren.php
	 * @return Iterator The inner iterator for the current entry.
	 */
	abstract public function getInnerIterator () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the current element
	 * @link http://php.net/manual/en/iterator.current.php
	 * @return mixed Can return any type.
	 */
	abstract public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move forward to next element
	 * @link http://php.net/manual/en/iterator.next.php
	 * @return void Any returned value is ignored.
	 */
	abstract public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the key of the current element
	 * @link http://php.net/manual/en/iterator.key.php
	 * @return scalar scalar on success, integer
	 * 0 on failure.
	 */
	abstract public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if current position is valid
	 * @link http://php.net/manual/en/iterator.valid.php
	 * @return boolean The return value will be casted to boolean and then evaluated.
	 * Returns true on success or false on failure.
	 */
	abstract public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the Iterator to the first element
	 * @link http://php.net/manual/en/iterator.rewind.php
	 * @return void Any returned value is ignored.
	 */
	abstract public function rewind () {}

}

/**
 * This iterator wrapper allows the conversion of anything that is
 * Traversable into an Iterator.
 * It is important to understand that most classes that do not implement
 * Iterators have reasons as most likely they do not allow the full
 * Iterator feature set. If so, techniques should be provided to prevent
 * misuse, otherwise expect exceptions or fatal errors.
 * @link http://php.net/manual/en/class.iteratoriterator.php
 */
class IteratorIterator implements Iterator, Traversable, OuterIterator {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Create an iterator from anything that is traversable
	 * @link http://php.net/manual/en/iteratoriterator.construct.php
	 * @param Traversable $iterator
	 */
	public function __construct (Traversable $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind to the first element
	 * @link http://php.net/manual/en/iteratoriterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if the iterator is valid
	 * @link http://php.net/manual/en/iteratoriterator.valid.php
	 * @return bool true if the iterator is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the key of the current element
	 * @link http://php.net/manual/en/iteratoriterator.key.php
	 * @return void The key of the current element.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current value
	 * @link http://php.net/manual/en/iteratoriterator.current.php
	 * @return void The value of the current element.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Forward to the next element
	 * @link http://php.net/manual/en/iteratoriterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the inner iterator
	 * @link http://php.net/manual/en/iteratoriterator.getinneriterator.php
	 * @return void The inner iterator as passed to IteratorIterator::__construct.
	 */
	public function getInnerIterator () {}

}

/**
 * This abstract iterator filters out unwanted values. This class should be extended to
 * implement custom iterator filters. The FilterIterator::accept()
 * must be implemented in the subclass.
 * @link http://php.net/manual/en/class.filteriterator.php
 */
class FilterIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Construct a filterIterator
	 * @link http://php.net/manual/en/filteriterator.construct.php
	 * @param Iterator $iterator
	 */
	public function __construct (Iterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the iterator
	 * @link http://php.net/manual/en/filteriterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element is valid
	 * @link http://php.net/manual/en/filteriterator.valid.php
	 * @return bool true if the current element is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current key
	 * @link http://php.net/manual/en/filteriterator.key.php
	 * @return mixed The current key.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current element value
	 * @link http://php.net/manual/en/filteriterator.current.php
	 * @return mixed The current element value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move the iterator forward
	 * @link http://php.net/manual/en/filteriterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the inner iterator
	 * @link http://php.net/manual/en/filteriterator.getinneriterator.php
	 * @return Iterator The inner iterator.
	 */
	public function getInnerIterator () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element of the iterator is acceptable
	 * @link http://php.net/manual/en/filteriterator.accept.php
	 * @return bool true if the current element is acceptable, otherwise false.
	 */
	abstract public function accept () {}

}

/**
 * This abstract iterator filters out unwanted values for a RecursiveIterator.
 * This class should be extended to implement custom filters. 
 * The RecursiveFilterIterator::accept() must be implemented in the subclass.
 * @link http://php.net/manual/en/class.recursivefilteriterator.php
 */
class RecursiveFilterIterator extends FilterIterator implements Iterator, Traversable, OuterIterator, RecursiveIterator {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Create a RecursiveFilterIterator from a RecursiveIterator
	 * @link http://php.net/manual/en/recursivefilteriterator.construct.php
	 * @param RecursiveIterator $iterator
	 */
	public function __construct (RecursiveIterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the inner iterator's current element has children
	 * @link http://php.net/manual/en/recursivefilteriterator.haschildren.php
	 * @return void true if the inner iterator has children, otherwise false
	 */
	public function hasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the inner iterator's children contained in a RecursiveFilterIterator
	 * @link http://php.net/manual/en/recursivefilteriterator.getchildren.php
	 * @return void a RecursiveFilterIterator containing the inner iterator's children.
	 */
	public function getChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the iterator
	 * @link http://php.net/manual/en/filteriterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element is valid
	 * @link http://php.net/manual/en/filteriterator.valid.php
	 * @return bool true if the current element is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current key
	 * @link http://php.net/manual/en/filteriterator.key.php
	 * @return mixed The current key.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current element value
	 * @link http://php.net/manual/en/filteriterator.current.php
	 * @return mixed The current element value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move the iterator forward
	 * @link http://php.net/manual/en/filteriterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the inner iterator
	 * @link http://php.net/manual/en/filteriterator.getinneriterator.php
	 * @return Iterator The inner iterator.
	 */
	public function getInnerIterator () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element of the iterator is acceptable
	 * @link http://php.net/manual/en/filteriterator.accept.php
	 * @return bool true if the current element is acceptable, otherwise false.
	 */
	abstract public function accept () {}

}

/**
 * ...
 * @link http://php.net/manual/en/class.parentiterator.php
 */
class ParentIterator extends RecursiveFilterIterator implements RecursiveIterator, OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Constructs a ParentIterator
	 * @link http://php.net/manual/en/parentiterator.construct.php
	 * @param RecursiveIterator $iterator
	 */
	public function __construct (RecursiveIterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Determines acceptability
	 * @link http://php.net/manual/en/parentiterator.accept.php
	 * @return bool true if the current element is acceptable, otherwise false.
	 */
	public function accept () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the inner iterator's current element has children
	 * @link http://php.net/manual/en/recursivefilteriterator.haschildren.php
	 * @return void true if the inner iterator has children, otherwise false
	 */
	public function hasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the inner iterator's children contained in a RecursiveFilterIterator
	 * @link http://php.net/manual/en/recursivefilteriterator.getchildren.php
	 * @return void a RecursiveFilterIterator containing the inner iterator's children.
	 */
	public function getChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the iterator
	 * @link http://php.net/manual/en/filteriterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element is valid
	 * @link http://php.net/manual/en/filteriterator.valid.php
	 * @return bool true if the current element is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current key
	 * @link http://php.net/manual/en/filteriterator.key.php
	 * @return mixed The current key.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current element value
	 * @link http://php.net/manual/en/filteriterator.current.php
	 * @return mixed The current element value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move the iterator forward
	 * @link http://php.net/manual/en/filteriterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the inner iterator
	 * @link http://php.net/manual/en/filteriterator.getinneriterator.php
	 * @return Iterator The inner iterator.
	 */
	public function getInnerIterator () {}

}

/**
 * Classes implementing Countable can be used with the
 * count function.
 * @link http://php.net/manual/en/class.countable.php
 */
interface Countable  {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Count elements of an object
	 * @link http://php.net/manual/en/countable.count.php
	 * @return int The custom count as an integer.
	 * </p>
	 * <p>
	 * The return value is cast to an integer.
	 */
	abstract public function count () {}

}

/**
 * The Seekable iterator.
 * @link http://php.net/manual/en/class.seekableiterator.php
 */
interface SeekableIterator extends Iterator, Traversable {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Seeks to a position
	 * @link http://php.net/manual/en/seekableiterator.seek.php
	 * @param int $position <p>
	 * The position to seek to.
	 * </p>
	 * @return void 
	 */
	abstract public function seek ($position) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the current element
	 * @link http://php.net/manual/en/iterator.current.php
	 * @return mixed Can return any type.
	 */
	abstract public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move forward to next element
	 * @link http://php.net/manual/en/iterator.next.php
	 * @return void Any returned value is ignored.
	 */
	abstract public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the key of the current element
	 * @link http://php.net/manual/en/iterator.key.php
	 * @return scalar scalar on success, integer
	 * 0 on failure.
	 */
	abstract public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if current position is valid
	 * @link http://php.net/manual/en/iterator.valid.php
	 * @return boolean The return value will be casted to boolean and then evaluated.
	 * Returns true on success or false on failure.
	 */
	abstract public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the Iterator to the first element
	 * @link http://php.net/manual/en/iterator.rewind.php
	 * @return void Any returned value is ignored.
	 */
	abstract public function rewind () {}

}

/**
 * ...
 * @link http://php.net/manual/en/class.limititerator.php
 */
class LimitIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Construct a LimitIterator
	 * @link http://php.net/manual/en/limititerator.construct.php
	 * @param Iterator $iterator
	 * @param $offset [optional]
	 * @param $count [optional]
	 */
	public function __construct (Iterator $iterator, $offset, $count) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the iterator to the specified starting offset
	 * @link http://php.net/manual/en/limititerator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element is valid
	 * @link http://php.net/manual/en/limititerator.valid.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get current key
	 * @link http://php.net/manual/en/limititerator.key.php
	 * @return mixed The current key.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get current element
	 * @link http://php.net/manual/en/limititerator.current.php
	 * @return mixed The current element.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move the iterator forward
	 * @link http://php.net/manual/en/limititerator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Seek to the given position
	 * @link http://php.net/manual/en/limititerator.seek.php
	 * @param int $position <p>
	 * The position being seeked to.
	 * </p>
	 * @return void 
	 */
	public function seek ($position) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the current position
	 * @link http://php.net/manual/en/limititerator.getposition.php
	 * @return int The current position.
	 */
	public function getPosition () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get inner iterator
	 * @link http://php.net/manual/en/limititerator.getinneriterator.php
	 * @return Iterator The inner iterator.
	 */
	public function getInnerIterator () {}

}

/**
 * This object supports cached iteration over another iterator.
 * @link http://php.net/manual/en/class.cachingiterator.php
 */
class CachingIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator, ArrayAccess, Countable {
	const CALL_TOSTRING = 1;
	const CATCH_GET_CHILD = 16;
	const TOSTRING_USE_KEY = 2;
	const TOSTRING_USE_CURRENT = 4;
	const TOSTRING_USE_INNER = 8;
	const FULL_CACHE = 256;


	/**
	 * (PHP 5)<br/>
	 * Construct a new CachingIterator object for the iterator.
	 * @link http://php.net/manual/en/cachingiterator.construct.php
	 * @param Iterator $iterator
	 * @param $flags [optional]
	 */
	public function __construct (Iterator $iterator, $flags) {}

	/**
	 * (PHP 5)<br/>
	 * Rewind the iterator
	 * @link http://php.net/manual/en/cachingiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5)<br/>
	 * Check whether the current element is valid
	 * @link http://php.net/manual/en/cachingiterator.valid.php
	 * @return void Returns true on success or false on failure.
	 */
	public function valid () {}

	/**
	 * (PHP 5)<br/>
	 * Return the key for the current element
	 * @link http://php.net/manual/en/cachingiterator.key.php
	 * @return void 
	 */
	public function key () {}

	/**
	 * (PHP 5)<br/>
	 * Return the current element
	 * @link http://php.net/manual/en/cachingiterator.current.php
	 * @return void Mixed
	 */
	public function current () {}

	/**
	 * (PHP 5)<br/>
	 * Move the iterator forward
	 * @link http://php.net/manual/en/cachingiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5)<br/>
	 * Check whether the inner iterator has a valid next element
	 * @link http://php.net/manual/en/cachingiterator.hasnext.php
	 * @return void Returns true on success or false on failure.
	 */
	public function hasNext () {}

	/**
	 * (PHP 5)<br/>
	 * Return the string representation of the current element
	 * @link http://php.net/manual/en/cachingiterator.tostring.php
	 * @return void The string representation of the current element.
	 */
	public function __toString () {}

	/**
	 * (PHP 5)<br/>
	 * Return the innter iterator
	 * @link http://php.net/manual/en/cachingiterator.getinneriterator.php
	 * @return void an object implementing the Iterator interface.
	 */
	public function getInnerIterator () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Get flags used
	 * @link http://php.net/manual/en/cachingiterator.getflags.php
	 * @return void Description...
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The setFlags purpose
	 * @link http://php.net/manual/en/cachingiterator.setflags.php
	 * @param bitmask $flags <p>
	 * Bitmask of the flags to set.
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The offsetGet purpose
	 * @link http://php.net/manual/en/cachingiterator.offsetget.php
	 * @param string $index <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function offsetGet ($index) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The offsetSet purpose
	 * @link http://php.net/manual/en/cachingiterator.offsetset.php
	 * @param string $index <p>
	 * The index of the element to be set.
	 * </p>
	 * @param string $newval <p>
	 * The new value for the index.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The offsetUnset purpose
	 * @link http://php.net/manual/en/cachingiterator.offsetunset.php
	 * @param string $index <p>
	 * The index of the element to be unset.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($index) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The offsetExists purpose
	 * @link http://php.net/manual/en/cachingiterator.offsetexists.php
	 * @param string $index <p>
	 * The index being checked.
	 * </p>
	 * @return void true if an entry referenced by the offset exists, false otherwise.
	 */
	public function offsetExists ($index) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The getCache purpose
	 * @link http://php.net/manual/en/cachingiterator.getcache.php
	 * @return void Description...
	 */
	public function getCache () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * The number of elements in the iterator
	 * @link http://php.net/manual/en/cachingiterator.count.php
	 * @return void The count of the elements iterated over.
	 */
	public function count () {}

}

/**
 * ...
 * @link http://php.net/manual/en/class.recursivecachingiterator.php
 */
class RecursiveCachingIterator extends CachingIterator implements Countable, ArrayAccess, Iterator, Traversable, OuterIterator, RecursiveIterator {
	const CALL_TOSTRING = 1;
	const CATCH_GET_CHILD = 16;
	const TOSTRING_USE_KEY = 2;
	const TOSTRING_USE_CURRENT = 4;
	const TOSTRING_USE_INNER = 8;
	const FULL_CACHE = 256;


	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Construct
	 * @link http://php.net/manual/en/recursivecachingiterator.construct.php
	 * @param Iterator $iterator
	 * @param $flags [optional]
	 */
	public function __construct (Iterator $iterator, $flags) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element of the inner iterator has children
	 * @link http://php.net/manual/en/recursivecachingiterator.haschildren.php
	 * @return bool true if the inner iterator has children, otherwise false
	 */
	public function hasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return the inner iterator's children as a RecursiveCachingIterator
	 * @link http://php.net/manual/en/recursivecachingiterator.getchildren.php
	 * @return RecursiveCachingIterator The inner iterator's children, as a RecursiveCachingIterator.
	 */
	public function getChildren () {}

	/**
	 * (PHP 5)<br/>
	 * Rewind the iterator
	 * @link http://php.net/manual/en/cachingiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5)<br/>
	 * Check whether the current element is valid
	 * @link http://php.net/manual/en/cachingiterator.valid.php
	 * @return void Returns true on success or false on failure.
	 */
	public function valid () {}

	/**
	 * (PHP 5)<br/>
	 * Return the key for the current element
	 * @link http://php.net/manual/en/cachingiterator.key.php
	 * @return void 
	 */
	public function key () {}

	/**
	 * (PHP 5)<br/>
	 * Return the current element
	 * @link http://php.net/manual/en/cachingiterator.current.php
	 * @return void Mixed
	 */
	public function current () {}

	/**
	 * (PHP 5)<br/>
	 * Move the iterator forward
	 * @link http://php.net/manual/en/cachingiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5)<br/>
	 * Check whether the inner iterator has a valid next element
	 * @link http://php.net/manual/en/cachingiterator.hasnext.php
	 * @return void Returns true on success or false on failure.
	 */
	public function hasNext () {}

	/**
	 * (PHP 5)<br/>
	 * Return the string representation of the current element
	 * @link http://php.net/manual/en/cachingiterator.tostring.php
	 * @return void The string representation of the current element.
	 */
	public function __toString () {}

	/**
	 * (PHP 5)<br/>
	 * Return the innter iterator
	 * @link http://php.net/manual/en/cachingiterator.getinneriterator.php
	 * @return void an object implementing the Iterator interface.
	 */
	public function getInnerIterator () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Get flags used
	 * @link http://php.net/manual/en/cachingiterator.getflags.php
	 * @return void Description...
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The setFlags purpose
	 * @link http://php.net/manual/en/cachingiterator.setflags.php
	 * @param bitmask $flags <p>
	 * Bitmask of the flags to set.
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The offsetGet purpose
	 * @link http://php.net/manual/en/cachingiterator.offsetget.php
	 * @param string $index <p>
	 * Description...
	 * </p>
	 * @return void Description...
	 */
	public function offsetGet ($index) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The offsetSet purpose
	 * @link http://php.net/manual/en/cachingiterator.offsetset.php
	 * @param string $index <p>
	 * The index of the element to be set.
	 * </p>
	 * @param string $newval <p>
	 * The new value for the index.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The offsetUnset purpose
	 * @link http://php.net/manual/en/cachingiterator.offsetunset.php
	 * @param string $index <p>
	 * The index of the element to be unset.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($index) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The offsetExists purpose
	 * @link http://php.net/manual/en/cachingiterator.offsetexists.php
	 * @param string $index <p>
	 * The index being checked.
	 * </p>
	 * @return void true if an entry referenced by the offset exists, false otherwise.
	 */
	public function offsetExists ($index) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * The getCache purpose
	 * @link http://php.net/manual/en/cachingiterator.getcache.php
	 * @return void Description...
	 */
	public function getCache () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * The number of elements in the iterator
	 * @link http://php.net/manual/en/cachingiterator.count.php
	 * @return void The count of the elements iterated over.
	 */
	public function count () {}

}

/**
 * This iterator cannot be rewinded.
 * @link http://php.net/manual/en/class.norewinditerator.php
 */
class NoRewindIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Construct a NoRewindIterator
	 * @link http://php.net/manual/en/norewinditerator.construct.php
	 * @param Iterator $iterator
	 */
	public function __construct (Iterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Prevents the rewind operation on the inner iterator.
	 * @link http://php.net/manual/en/norewinditerator.haschildren.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Validates the iterator
	 * @link http://php.net/manual/en/norewinditerator.valid.php
	 * @return bool Returns true on success or false on failure.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current key
	 * @link http://php.net/manual/en/norewinditerator.key.php
	 * @return mixed The current key.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current value
	 * @link http://php.net/manual/en/norewinditerator.current.php
	 * @return mixed The current value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Forward to the next element
	 * @link http://php.net/manual/en/norewinditerator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the inner iterator
	 * @link http://php.net/manual/en/norewinditerator.getinneriterator.php
	 * @return iterator The inner iterator, as passed to NoRewindIterator::__construct.
	 */
	public function getInnerIterator () {}

}

/**
 * Iterate over multiple collections.
 * @link http://php.net/manual/en/class.appenditerator.php
 */
class AppendIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Constructs an AppendIterator
	 * @link http://php.net/manual/en/appenditerator.construct.php
	 */
	public function __construct () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Appends an iterator
	 * @link http://php.net/manual/en/appenditerator.append.php
	 * @param Iterator $iterator <p>
	 * The iterator to append.
	 * </p>
	 * @return void 
	 */
	public function append ($iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewinds the Iterator
	 * @link http://php.net/manual/en/appenditerator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks validity of the current element
	 * @link http://php.net/manual/en/appenditerator.valid.php
	 * @return void Returns true on success or false on failure.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the current key
	 * @link http://php.net/manual/en/appenditerator.key.php
	 * @return void The current key if it is valid or &null; otherwise.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the current value
	 * @link http://php.net/manual/en/appenditerator.current.php
	 * @return void The current value if it is valid or &null; otherwise.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Moves to the next element
	 * @link http://php.net/manual/en/appenditerator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets an inner iterator
	 * @link http://php.net/manual/en/appenditerator.getinneriterator.php
	 * @return void The current inner Iterator.
	 */
	public function getInnerIterator () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets an index of iterators
	 * @link http://php.net/manual/en/appenditerator.getiteratorindex.php
	 * @return void The index of iterators.
	 */
	public function getIteratorIndex () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * The getArrayIterator method
	 * @link http://php.net/manual/en/appenditerator.getarrayiterator.php
	 * @return void 
	 */
	public function getArrayIterator () {}

}

/**
 * The InfiniteIterator allows one to
 * infinitely iterate over an iterator without having to manually
 * rewind the iterator upon reaching its end.
 * @link http://php.net/manual/en/class.infiniteiterator.php
 */
class InfiniteIterator extends IteratorIterator implements OuterIterator, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Constructs an InfiniteIterator
	 * @link http://php.net/manual/en/infiniteiterator.construct.php
	 * @param Iterator $iterator
	 */
	public function __construct (Iterator $iterator) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Moves the inner Iterator forward or rewinds it
	 * @link http://php.net/manual/en/infiniteiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind to the first element
	 * @link http://php.net/manual/en/iteratoriterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if the iterator is valid
	 * @link http://php.net/manual/en/iteratoriterator.valid.php
	 * @return bool true if the iterator is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the key of the current element
	 * @link http://php.net/manual/en/iteratoriterator.key.php
	 * @return void The key of the current element.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current value
	 * @link http://php.net/manual/en/iteratoriterator.current.php
	 * @return void The value of the current element.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the inner iterator
	 * @link http://php.net/manual/en/iteratoriterator.getinneriterator.php
	 * @return void The inner iterator as passed to IteratorIterator::__construct.
	 */
	public function getInnerIterator () {}

}

/**
 * This iterator can be used to filter another iterator via a regular expression.
 * @link http://php.net/manual/en/class.regexiterator.php
 */
class RegexIterator extends FilterIterator implements Iterator, Traversable, OuterIterator {
	const USE_KEY = 1;
	const MATCH = 0;
	const GET_MATCH = 1;
	const ALL_MATCHES = 2;
	const SPLIT = 3;
	const REPLACE = 4;

	public $replacement;


	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Creates a new RegexIterator.
	 * @link http://php.net/manual/en/regexiterator.construct.php
	 * @param Iterator $iterator
	 * @param $regex
	 * @param $mode [optional]
	 * @param $flags [optional]
	 * @param $preg_flags [optional]
	 */
	public function __construct (Iterator $iterator, $regex, $mode, $flags, $preg_flags) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Get accept status
	 * @link http://php.net/manual/en/regexiterator.accept.php
	 * @return bool true if a match, otherwise false
	 */
	public function accept () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Returns operation mode.
	 * @link http://php.net/manual/en/regexiterator.getmode.php
	 * @return int the operation mode.
	 */
	public function getMode () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sets the operation mode.
	 * @link http://php.net/manual/en/regexiterator.setmode.php
	 * @param int $mode <p>
	 * The operation mode.
	 * </p>
	 * <p>
	 * The available modes are listed below. The actual
	 * meanings of these modes are described in the
	 * predefined constants.
	 * <table>
	 * RegexIterator modes
	 * <tr valign="top">
	 * <td>value</td>
	 * <td>constant</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>
	 * RegexIterator::MATCH
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * RegexIterator::GET_MATCH
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>
	 * RegexIterator::ALL_MATCHES
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>3</td>
	 * <td>
	 * RegexIterator::SPLIT
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>4</td>
	 * <td>
	 * RegexIterator::REPLACE
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 
	 */
	public function setMode ($mode) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Returns the special flags.
	 * @link http://php.net/manual/en/regexiterator.getflags.php
	 * @return int the special flags.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sets the special flags.
	 * @link http://php.net/manual/en/regexiterator.setflags.php
	 * @param int $flags <p>
	 * The special flags. It takes a bitmask of class constants.
	 * </p>
	 * <p>
	 * The available flags are listed below. The actual
	 * meanings of these flags are described in the
	 * predefined constants.
	 * <table>
	 * RegexIterator special flags
	 * <tr valign="top">
	 * <td>value</td>
	 * <td>constant</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * RegexIterator::USE_KEY
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Returns the regular expression flags.
	 * @link http://php.net/manual/en/regexiterator.getpregflags.php
	 * @return int the regular expression flags.
	 */
	public function getPregFlags () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sets the regular expression flags.
	 * @link http://php.net/manual/en/regexiterator.setpregflags.php
	 * @param int $preg_flags <p>
	 * The regular expression flags. See RegexIterator::__construct
	 * for an overview of available flags.
	 * </p>
	 * @return void 
	 */
	public function setPregFlags ($preg_flags) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the iterator
	 * @link http://php.net/manual/en/filteriterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element is valid
	 * @link http://php.net/manual/en/filteriterator.valid.php
	 * @return bool true if the current element is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current key
	 * @link http://php.net/manual/en/filteriterator.key.php
	 * @return mixed The current key.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current element value
	 * @link http://php.net/manual/en/filteriterator.current.php
	 * @return mixed The current element value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move the iterator forward
	 * @link http://php.net/manual/en/filteriterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the inner iterator
	 * @link http://php.net/manual/en/filteriterator.getinneriterator.php
	 * @return Iterator The inner iterator.
	 */
	public function getInnerIterator () {}

}

/**
 * This recursive iterator can filter another recursive iterator via a regular expression.
 * @link http://php.net/manual/en/class.recursiveregexiterator.php
 */
class RecursiveRegexIterator extends RegexIterator implements OuterIterator, Traversable, Iterator, RecursiveIterator {
	const USE_KEY = 1;
	const MATCH = 0;
	const GET_MATCH = 1;
	const ALL_MATCHES = 2;
	const SPLIT = 3;
	const REPLACE = 4;

	public $replacement;


	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Creates a new RecursiveRegexIterator.
	 * @link http://php.net/manual/en/recursiveregexiterator.construct.php
	 * @param RecursiveIterator $iterator
	 * @param $regex
	 * @param $mode [optional]
	 * @param $flags [optional]
	 * @param $preg_flags [optional]
	 */
	public function __construct (RecursiveIterator $iterator, $regex, $mode, $flags, $preg_flags) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Returns whether an iterator can be obtained for the current entry.
	 * @link http://php.net/manual/en/recursiveregexiterator.haschildren.php
	 * @return bool true if an iterator can be obtained for the current entry, otherwise returns false.
	 */
	public function hasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Returns an iterator for the current entry.
	 * @link http://php.net/manual/en/recursiveregexiterator.getchildren.php
	 * @return RecursiveRegexIterator An iterator for the current entry, if it can be iterated over by the inner iterator.
	 */
	public function getChildren () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Get accept status
	 * @link http://php.net/manual/en/regexiterator.accept.php
	 * @return bool true if a match, otherwise false
	 */
	public function accept () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Returns operation mode.
	 * @link http://php.net/manual/en/regexiterator.getmode.php
	 * @return int the operation mode.
	 */
	public function getMode () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sets the operation mode.
	 * @link http://php.net/manual/en/regexiterator.setmode.php
	 * @param int $mode <p>
	 * The operation mode.
	 * </p>
	 * <p>
	 * The available modes are listed below. The actual
	 * meanings of these modes are described in the
	 * predefined constants.
	 * <table>
	 * RegexIterator modes
	 * <tr valign="top">
	 * <td>value</td>
	 * <td>constant</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>0</td>
	 * <td>
	 * RegexIterator::MATCH
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * RegexIterator::GET_MATCH
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>
	 * RegexIterator::ALL_MATCHES
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>3</td>
	 * <td>
	 * RegexIterator::SPLIT
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>4</td>
	 * <td>
	 * RegexIterator::REPLACE
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 
	 */
	public function setMode ($mode) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Returns the special flags.
	 * @link http://php.net/manual/en/regexiterator.getflags.php
	 * @return int the special flags.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sets the special flags.
	 * @link http://php.net/manual/en/regexiterator.setflags.php
	 * @param int $flags <p>
	 * The special flags. It takes a bitmask of class constants.
	 * </p>
	 * <p>
	 * The available flags are listed below. The actual
	 * meanings of these flags are described in the
	 * predefined constants.
	 * <table>
	 * RegexIterator special flags
	 * <tr valign="top">
	 * <td>value</td>
	 * <td>constant</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * RegexIterator::USE_KEY
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Returns the regular expression flags.
	 * @link http://php.net/manual/en/regexiterator.getpregflags.php
	 * @return int the regular expression flags.
	 */
	public function getPregFlags () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sets the regular expression flags.
	 * @link http://php.net/manual/en/regexiterator.setpregflags.php
	 * @param int $preg_flags <p>
	 * The regular expression flags. See RegexIterator::__construct
	 * for an overview of available flags.
	 * </p>
	 * @return void 
	 */
	public function setPregFlags ($preg_flags) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the iterator
	 * @link http://php.net/manual/en/filteriterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Check whether the current element is valid
	 * @link http://php.net/manual/en/filteriterator.valid.php
	 * @return bool true if the current element is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current key
	 * @link http://php.net/manual/en/filteriterator.key.php
	 * @return mixed The current key.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the current element value
	 * @link http://php.net/manual/en/filteriterator.current.php
	 * @return mixed The current element value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move the iterator forward
	 * @link http://php.net/manual/en/filteriterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get the inner iterator
	 * @link http://php.net/manual/en/filteriterator.getinneriterator.php
	 * @return Iterator The inner iterator.
	 */
	public function getInnerIterator () {}

}

/**
 * The EmptyIterator class for an empty iterator.
 * @link http://php.net/manual/en/class.emptyiterator.php
 */
class EmptyIterator implements Iterator, Traversable {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * The rewind() method
	 * @link http://php.net/manual/en/emptyiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * The valid() method
	 * @link http://php.net/manual/en/emptyiterator.valid.php
	 * @return void false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * The key() method
	 * @link http://php.net/manual/en/emptyiterator.key.php
	 * @return void 
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * The current() method
	 * @link http://php.net/manual/en/emptyiterator.current.php
	 * @return void 
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * The next() method
	 * @link http://php.net/manual/en/emptyiterator.next.php
	 * @return void 
	 */
	public function next () {}

}

/**
 * Allows iterating over a RecursiveIterator to generate an ASCII graphic tree.
 * @link http://php.net/manual/en/class.recursivetreeiterator.php
 */
class RecursiveTreeIterator extends RecursiveIteratorIterator implements OuterIterator, Traversable, Iterator {
	const LEAVES_ONLY = 0;
	const SELF_FIRST = 1;
	const CHILD_FIRST = 2;
	const CATCH_GET_CHILD = 16;
	const BYPASS_CURRENT = 4;
	const BYPASS_KEY = 8;
	const PREFIX_LEFT = 0;
	const PREFIX_MID_HAS_NEXT = 1;
	const PREFIX_MID_LAST = 2;
	const PREFIX_END_HAS_NEXT = 3;
	const PREFIX_END_LAST = 4;
	const PREFIX_RIGHT = 5;


	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Construct a RecursiveTreeIterator
	 * @link http://php.net/manual/en/recursivetreeiterator.construct.php
	 * @param Traversable $iterator
	 * @param $flags [optional]
	 * @param $caching_it_flags [optional]
	 * @param $mode [optional]
	 */
	public function __construct (Traversable $iterator, $flags, $caching_it_flags, $mode) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewind iterator
	 * @link http://php.net/manual/en/recursivetreeiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Check validity
	 * @link http://php.net/manual/en/recursivetreeiterator.valid.php
	 * @return bool true if the current position is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get the key of the current element
	 * @link http://php.net/manual/en/recursivetreeiterator.key.php
	 * @return string the current key prefixed and postfixed.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get current element
	 * @link http://php.net/manual/en/recursivetreeiterator.current.php
	 * @return string the current element prefixed and postfixed.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to next element
	 * @link http://php.net/manual/en/recursivetreeiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Begin iteration
	 * @link http://php.net/manual/en/recursivetreeiterator.beginiteration.php
	 * @return RecursiveIterator A RecursiveIterator.
	 */
	public function beginIteration () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * End iteration
	 * @link http://php.net/manual/en/recursivetreeiterator.enditeration.php
	 * @return void 
	 */
	public function endIteration () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Has children
	 * @link http://php.net/manual/en/recursivetreeiterator.callhaschildren.php
	 * @return bool true if there are children, otherwise false
	 */
	public function callHasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get children
	 * @link http://php.net/manual/en/recursivetreeiterator.callgetchildren.php
	 * @return RecursiveIterator A RecursiveIterator.
	 */
	public function callGetChildren () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Begin children
	 * @link http://php.net/manual/en/recursivetreeiterator.beginchildren.php
	 * @return void 
	 */
	public function beginChildren () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * End children
	 * @link http://php.net/manual/en/recursivetreeiterator.endchildren.php
	 * @return void 
	 */
	public function endChildren () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Next element
	 * @link http://php.net/manual/en/recursivetreeiterator.nextelement.php
	 * @return void 
	 */
	public function nextElement () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get the prefix
	 * @link http://php.net/manual/en/recursivetreeiterator.getprefix.php
	 * @return string the string to place in front of current element
	 */
	public function getPrefix () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Set a part of the prefix
	 * @link http://php.net/manual/en/recursivetreeiterator.setprefixpart.php
	 * @param int $part <p>
	 * One of the RecursiveTreeIterator::PREFIX_* constants.
	 * </p>
	 * @param string $value <p>
	 * The value to assign to the part of the prefix specified in part.
	 * </p>
	 * @return void 
	 */
	public function setPrefixPart ($part, $value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get current entry
	 * @link http://php.net/manual/en/recursivetreeiterator.getentry.php
	 * @return string the part of the tree built for the current element.
	 */
	public function getEntry () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get the postfix
	 * @link http://php.net/manual/en/recursivetreeiterator.getpostfix.php
	 * @return void the string to place after the current element.
	 */
	public function getPostfix () {}

	/**
	 * (PHP 5)<br/>
	 * Get the current depth of the recursive iteration
	 * @link http://php.net/manual/en/recursiveiteratoriterator.getdepth.php
	 * @return int The current depth of the recursive iteration.
	 */
	public function getDepth () {}

	/**
	 * (PHP 5)<br/>
	 * The current active sub iterator
	 * @link http://php.net/manual/en/recursiveiteratoriterator.getsubiterator.php
	 * @param $level [optional]
	 * @return RecursiveIterator The current active sub iterator.
	 */
	public function getSubIterator ($level) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get inner iterator
	 * @link http://php.net/manual/en/recursiveiteratoriterator.getinneriterator.php
	 * @return iterator The current active sub iterator.
	 */
	public function getInnerIterator () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Set max depth
	 * @link http://php.net/manual/en/recursiveiteratoriterator.setmaxdepth.php
	 * @param string $max_depth [optional] <p>
	 * The maximum allowed depth. -1 is used
	 * for any depth.
	 * </p>
	 * @return void 
	 */
	public function setMaxDepth ($max_depth = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get max depth
	 * @link http://php.net/manual/en/recursiveiteratoriterator.getmaxdepth.php
	 * @return mixed The maximum accepted depth, or false if any depth is allowed.
	 */
	public function getMaxDepth () {}

}

/**
 * This class allows objects to work as arrays.
 * @link http://php.net/manual/en/class.arrayobject.php
 */
class ArrayObject implements IteratorAggregate, Traversable, ArrayAccess, Serializable, Countable {
	const STD_PROP_LIST = 1;
	const ARRAY_AS_PROPS = 2;


	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Construct a new array object
	 * @link http://php.net/manual/en/arrayobject.construct.php
	 * @param $array
	 */
	public function __construct ($array) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Returns whether the requested index exists
	 * @link http://php.net/manual/en/arrayobject.offsetexists.php
	 * @param mixed $index <p>
	 * The index being checked.
	 * </p>
	 * @return bool true if the requested index exists, otherwise false
	 */
	public function offsetExists ($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Returns the value at the specified index
	 * @link http://php.net/manual/en/arrayobject.offsetget.php
	 * @param mixed $index <p>
	 * The index with the value.
	 * </p>
	 * @return mixed The value at the specified index or false.
	 */
	public function offsetGet ($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Sets the value at the specified index to newval
	 * @link http://php.net/manual/en/arrayobject.offsetset.php
	 * @param mixed $index <p>
	 * The index being set.
	 * </p>
	 * @param mixed $newval <p>
	 * The new value for the index.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Unsets the value at the specified index
	 * @link http://php.net/manual/en/arrayobject.offsetunset.php
	 * @param mixed $index <p>
	 * The index being unset.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Appends the value
	 * @link http://php.net/manual/en/arrayobject.append.php
	 * @param mixed $value <p>
	 * The value being appended.
	 * </p>
	 * @return void 
	 */
	public function append ($value) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Creates a copy of the ArrayObject.
	 * @link http://php.net/manual/en/arrayobject.getarraycopy.php
	 * @return array a copy of the array. When the ArrayObject refers to an object
	 * an array of the public properties of that object will be returned.
	 */
	public function getArrayCopy () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Get the number of public properties in the ArrayObject
	 * @link http://php.net/manual/en/arrayobject.count.php
	 * @return int The number of public properties in the ArrayObject.
	 * </p>
	 * <p>
	 * When the ArrayObject is constructed from an array all properties are public.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the behavior flags.
	 * @link http://php.net/manual/en/arrayobject.getflags.php
	 * @return int the behavior flags of the ArrayObject.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Sets the behavior flags.
	 * @link http://php.net/manual/en/arrayobject.setflags.php
	 * @param int $flags <p>
	 * The new ArrayObject behavior.
	 * It takes on either a bitmask, or named constants. Using named
	 * constants is strongly encouraged to ensure compatibility for future
	 * versions.
	 * </p>
	 * <p>
	 * The available behavior flags are listed below. The actual
	 * meanings of these flags are described in the
	 * predefined constants.
	 * <table>
	 * ArrayObject behavior flags
	 * <tr valign="top">
	 * <td>value</td>
	 * <td>constant</td>
	 * </tr>
	 * <tr valign="top">
	 * <td>1</td>
	 * <td>
	 * ArrayObject::STD_PROP_LIST
	 * </td>
	 * </tr>
	 * <tr valign="top">
	 * <td>2</td>
	 * <td>
	 * ArrayObject::ARRAY_AS_PROPS
	 * </td>
	 * </tr>
	 * </table>
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort the entries by value
	 * @link http://php.net/manual/en/arrayobject.asort.php
	 * @return void 
	 */
	public function asort () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort the entries by key
	 * @link http://php.net/manual/en/arrayobject.ksort.php
	 * @return void 
	 */
	public function ksort () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort the entries with a user-defined comparison function and maintain key association
	 * @link http://php.net/manual/en/arrayobject.uasort.php
	 * @param callback $cmp_function <p>
	 * Function cmp_function should accept two
	 * parameters which will be filled by pairs of entries.
	 * The comparison function must return an integer less than, equal
	 * to, or greater than zero if the first argument is considered to
	 * be respectively less than, equal to, or greater than the
	 * second.
	 * </p>
	 * @return void 
	 */
	public function uasort ($cmp_function) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort the entries by keys using a user-defined comparison function
	 * @link http://php.net/manual/en/arrayobject.uksort.php
	 * @param callback $cmp_function <p>
	 * The callback comparison function.
	 * </p>
	 * <p>
	 * Function cmp_function should accept two
	 * parameters which will be filled by pairs of entry keys.
	 * The comparison function must return an integer less than, equal
	 * to, or greater than zero if the first argument is considered to
	 * be respectively less than, equal to, or greater than the
	 * second.
	 * </p>
	 * @return void 
	 */
	public function uksort ($cmp_function) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort entries using a "natural order" algorithm
	 * @link http://php.net/manual/en/arrayobject.natsort.php
	 * @return void 
	 */
	public function natsort () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort an array using a case insensitive "natural order" algorithm
	 * @link http://php.net/manual/en/arrayobject.natcasesort.php
	 * @return void 
	 */
	public function natcasesort () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Unserialize an ArrayObject
	 * @link http://php.net/manual/en/arrayobject.unserialize.php
	 * @param string $serialized <p>
	 * The serialized ArrayObject.
	 * </p>
	 * @return void The unserialized ArrayObject.
	 */
	public function unserialize ($serialized) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Serialize an ArrayObject
	 * @link http://php.net/manual/en/arrayobject.serialize.php
	 * @return void The serialized representation of the ArrayObject.
	 */
	public function serialize () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Create a new iterator from an ArrayObject instance
	 * @link http://php.net/manual/en/arrayobject.getiterator.php
	 * @return ArrayIterator An iterator from an ArrayObject.
	 */
	public function getIterator () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Exchange the array for another one.
	 * @link http://php.net/manual/en/arrayobject.exchangearray.php
	 * @param mixed $input <p>
	 * The new array or object to exchange with the current array.
	 * </p>
	 * @return array the old array.
	 */
	public function exchangeArray ($input) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Sets the iterator classname for the ArrayObject.
	 * @link http://php.net/manual/en/arrayobject.setiteratorclass.php
	 * @param string $iterator_class <p>
	 * The classname of the array iterator to use when iterating over this object.
	 * </p>
	 * @return void 
	 */
	public function setIteratorClass ($iterator_class) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets the iterator classname for the ArrayObject.
	 * @link http://php.net/manual/en/arrayobject.getiteratorclass.php
	 * @return int the iterator class name that is used to iterate over this object.
	 */
	public function getIteratorClass () {}

}

/**
 * This iterator allows to unset and modify values and keys while iterating
 * over Arrays and Objects.
 * @link http://php.net/manual/en/class.arrayiterator.php
 */
class ArrayIterator implements Iterator, Traversable, ArrayAccess, SeekableIterator, Serializable, Countable {
	const STD_PROP_LIST = 1;
	const ARRAY_AS_PROPS = 2;


	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Construct an ArrayIterator
	 * @link http://php.net/manual/en/arrayiterator.construct.php
	 * @param $array
	 */
	public function __construct ($array) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Check if offset exists
	 * @link http://php.net/manual/en/arrayiterator.offsetexists.php
	 * @param string $index <p>
	 * The offset being checked.
	 * </p>
	 * @return void true if the offset exists, otherwise false
	 */
	public function offsetExists ($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Get value for an offset
	 * @link http://php.net/manual/en/arrayiterator.offsetget.php
	 * @param string $index <p>
	 * The offset to get the value from.
	 * </p>
	 * @return mixed The value at offset index.
	 */
	public function offsetGet ($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Set value for an offset
	 * @link http://php.net/manual/en/arrayiterator.offsetset.php
	 * @param string $index <p>
	 * The index to set for.
	 * </p>
	 * @param string $newval <p>
	 * The new value to store at the index.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Unset value for an offset
	 * @link http://php.net/manual/en/arrayiterator.offsetunset.php
	 * @param string $index <p>
	 * The offset to unset.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Append an element
	 * @link http://php.net/manual/en/arrayiterator.append.php
	 * @param string $value <p>
	 * The value to append.
	 * </p>
	 * @return void 
	 */
	public function append ($value) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Get array copy
	 * @link http://php.net/manual/en/arrayiterator.getarraycopy.php
	 * @return void A copy of the array, or array of public properties
	 * if ArrayIterator refers to an object.
	 */
	public function getArrayCopy () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Count elements
	 * @link http://php.net/manual/en/arrayiterator.count.php
	 * @return void The number.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get flags
	 * @link http://php.net/manual/en/arrayiterator.getflags.php
	 * @return void The current flags.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Set behaviour flags
	 * @link http://php.net/manual/en/arrayiterator.setflags.php
	 * @param string $flags <p>
	 * A bitmask as follows:
	 * 0 = Properties of the object have their normal functionality
	 * when accessed as list (var_dump, foreach, etc.).
	 * 1 = Array indices can be accessed as properties in read/write.
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort array by values
	 * @link http://php.net/manual/en/arrayiterator.asort.php
	 * @return void 
	 */
	public function asort () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort array by keys
	 * @link http://php.net/manual/en/arrayiterator.ksort.php
	 * @return void 
	 */
	public function ksort () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * User defined sort
	 * @link http://php.net/manual/en/arrayiterator.uasort.php
	 * @param string $cmp_function <p>
	 * The compare function used for the sort.
	 * </p>
	 * @return void 
	 */
	public function uasort ($cmp_function) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * User defined sort
	 * @link http://php.net/manual/en/arrayiterator.uksort.php
	 * @param string $cmp_function <p>
	 * The compare function used for the sort.
	 * </p>
	 * @return void 
	 */
	public function uksort ($cmp_function) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort an array naturally
	 * @link http://php.net/manual/en/arrayiterator.natsort.php
	 * @return void 
	 */
	public function natsort () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort an array naturally, case insensitive
	 * @link http://php.net/manual/en/arrayiterator.natcasesort.php
	 * @return void 
	 */
	public function natcasesort () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Unserialize
	 * @link http://php.net/manual/en/arrayiterator.unserialize.php
	 * @param string $serialized <p>
	 * The serialized ArrayIterator object to be unserialized.
	 * </p>
	 * @return string The ArrayIterator.
	 */
	public function unserialize ($serialized) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Serialize
	 * @link http://php.net/manual/en/arrayiterator.serialize.php
	 * @return string The serialized ArrayIterator.
	 */
	public function serialize () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Rewind array back to the start
	 * @link http://php.net/manual/en/arrayiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Return current array entry
	 * @link http://php.net/manual/en/arrayiterator.current.php
	 * @return mixed The current array entry.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Return current array key
	 * @link http://php.net/manual/en/arrayiterator.key.php
	 * @return mixed The current array key.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Move to next entry
	 * @link http://php.net/manual/en/arrayiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Check whether array contains more entries
	 * @link http://php.net/manual/en/arrayiterator.valid.php
	 * @return bool 
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Seek to position
	 * @link http://php.net/manual/en/arrayiterator.seek.php
	 * @param int $position <p>
	 * The position to seek to.
	 * </p>
	 * @return void 
	 */
	public function seek ($position) {}

}

/**
 * This iterator allows to unset and modify values and keys while iterating over Arrays and Objects
 * in the same way as the ArrayIterator. Additionally it is possible to iterate
 * over the current iterator entry.
 * @link http://php.net/manual/en/class.recursivearrayiterator.php
 */
class RecursiveArrayIterator extends ArrayIterator implements Serializable, SeekableIterator, ArrayAccess, Traversable, Iterator, RecursiveIterator {
	const CHILD_ARRAYS_ONLY = 4;


	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns whether current entry is an array or an object.
	 * @link http://php.net/manual/en/recursivearrayiterator.haschildren.php
	 * @return bool true if the current entry is an array or an object,
	 * otherwise false is returned.
	 */
	public function hasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns an iterator for the current entry if it is an <type>array</type> or an <type>object</type>.
	 * @link http://php.net/manual/en/recursivearrayiterator.getchildren.php
	 * @return RecursiveArrayIterator An iterator for the current entry, if it is an array or object.
	 */
	public function getChildren () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Construct an ArrayIterator
	 * @link http://php.net/manual/en/arrayiterator.construct.php
	 * @param $array
	 */
	public function __construct ($array) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Check if offset exists
	 * @link http://php.net/manual/en/arrayiterator.offsetexists.php
	 * @param string $index <p>
	 * The offset being checked.
	 * </p>
	 * @return void true if the offset exists, otherwise false
	 */
	public function offsetExists ($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Get value for an offset
	 * @link http://php.net/manual/en/arrayiterator.offsetget.php
	 * @param string $index <p>
	 * The offset to get the value from.
	 * </p>
	 * @return mixed The value at offset index.
	 */
	public function offsetGet ($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Set value for an offset
	 * @link http://php.net/manual/en/arrayiterator.offsetset.php
	 * @param string $index <p>
	 * The index to set for.
	 * </p>
	 * @param string $newval <p>
	 * The new value to store at the index.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Unset value for an offset
	 * @link http://php.net/manual/en/arrayiterator.offsetunset.php
	 * @param string $index <p>
	 * The offset to unset.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($index) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Append an element
	 * @link http://php.net/manual/en/arrayiterator.append.php
	 * @param string $value <p>
	 * The value to append.
	 * </p>
	 * @return void 
	 */
	public function append ($value) {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Get array copy
	 * @link http://php.net/manual/en/arrayiterator.getarraycopy.php
	 * @return void A copy of the array, or array of public properties
	 * if ArrayIterator refers to an object.
	 */
	public function getArrayCopy () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Count elements
	 * @link http://php.net/manual/en/arrayiterator.count.php
	 * @return void The number.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get flags
	 * @link http://php.net/manual/en/arrayiterator.getflags.php
	 * @return void The current flags.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Set behaviour flags
	 * @link http://php.net/manual/en/arrayiterator.setflags.php
	 * @param string $flags <p>
	 * A bitmask as follows:
	 * 0 = Properties of the object have their normal functionality
	 * when accessed as list (var_dump, foreach, etc.).
	 * 1 = Array indices can be accessed as properties in read/write.
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort array by values
	 * @link http://php.net/manual/en/arrayiterator.asort.php
	 * @return void 
	 */
	public function asort () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort array by keys
	 * @link http://php.net/manual/en/arrayiterator.ksort.php
	 * @return void 
	 */
	public function ksort () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * User defined sort
	 * @link http://php.net/manual/en/arrayiterator.uasort.php
	 * @param string $cmp_function <p>
	 * The compare function used for the sort.
	 * </p>
	 * @return void 
	 */
	public function uasort ($cmp_function) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * User defined sort
	 * @link http://php.net/manual/en/arrayiterator.uksort.php
	 * @param string $cmp_function <p>
	 * The compare function used for the sort.
	 * </p>
	 * @return void 
	 */
	public function uksort ($cmp_function) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort an array naturally
	 * @link http://php.net/manual/en/arrayiterator.natsort.php
	 * @return void 
	 */
	public function natsort () {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Sort an array naturally, case insensitive
	 * @link http://php.net/manual/en/arrayiterator.natcasesort.php
	 * @return void 
	 */
	public function natcasesort () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Unserialize
	 * @link http://php.net/manual/en/arrayiterator.unserialize.php
	 * @param string $serialized <p>
	 * The serialized ArrayIterator object to be unserialized.
	 * </p>
	 * @return string The ArrayIterator.
	 */
	public function unserialize ($serialized) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Serialize
	 * @link http://php.net/manual/en/arrayiterator.serialize.php
	 * @return string The serialized ArrayIterator.
	 */
	public function serialize () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Rewind array back to the start
	 * @link http://php.net/manual/en/arrayiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Return current array entry
	 * @link http://php.net/manual/en/arrayiterator.current.php
	 * @return mixed The current array entry.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Return current array key
	 * @link http://php.net/manual/en/arrayiterator.key.php
	 * @return mixed The current array key.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Move to next entry
	 * @link http://php.net/manual/en/arrayiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Check whether array contains more entries
	 * @link http://php.net/manual/en/arrayiterator.valid.php
	 * @return bool 
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.0.0)<br/>
	 * Seek to position
	 * @link http://php.net/manual/en/arrayiterator.seek.php
	 * @param int $position <p>
	 * The position to seek to.
	 * </p>
	 * @return void 
	 */
	public function seek ($position) {}

}

/**
 * The SplFileInfo class offers a high-level object oriented interface to
 * information for an individual file.
 * @link http://php.net/manual/en/class.splfileinfo.php
 */
class SplFileInfo  {

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Construct a new SplFileInfo object
	 * @link http://php.net/manual/en/splfileinfo.construct.php
	 * @param $file_name
	 */
	public function __construct ($file_name) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path without filename
	 * @link http://php.net/manual/en/splfileinfo.getpath.php
	 * @return string the path to the file.
	 */
	public function getPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the filename
	 * @link http://php.net/manual/en/splfileinfo.getfilename.php
	 * @return string The filename.
	 */
	public function getFilename () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the base name of the file
	 * @link http://php.net/manual/en/splfileinfo.getbasename.php
	 * @param string $suffix [optional] <p>
	 * Optional suffix to omit from the base name returned.
	 * </p>
	 * @return string the base name without path information.
	 */
	public function getBasename ($suffix = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path to the file
	 * @link http://php.net/manual/en/splfileinfo.getpathname.php
	 * @return string The path to the file.
	 */
	public function getPathname () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file permissions
	 * @link http://php.net/manual/en/splfileinfo.getperms.php
	 * @return int the file permissions.
	 */
	public function getPerms () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode for the file
	 * @link http://php.net/manual/en/splfileinfo.getinode.php
	 * @return int the inode number for the filesystem object.
	 */
	public function getInode () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file size
	 * @link http://php.net/manual/en/splfileinfo.getsize.php
	 * @return int The filesize in bytes.
	 */
	public function getSize () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the owner of the file
	 * @link http://php.net/manual/en/splfileinfo.getowner.php
	 * @return int The owner id in numerical format.
	 */
	public function getOwner () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the file group
	 * @link http://php.net/manual/en/splfileinfo.getgroup.php
	 * @return int The group id in numerical format.
	 */
	public function getGroup () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets last access time of the file
	 * @link http://php.net/manual/en/splfileinfo.getatime.php
	 * @return int the time the file was last accessed.
	 */
	public function getATime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the last modified time
	 * @link http://php.net/manual/en/splfileinfo.getmtime.php
	 * @return int the last modified time for the file, in a Unix timestamp.
	 */
	public function getMTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode change time
	 * @link http://php.net/manual/en/splfileinfo.getctime.php
	 * @return int The last change time, in a Unix timestamp.
	 */
	public function getCTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file type
	 * @link http://php.net/manual/en/splfileinfo.gettype.php
	 * @return string A string representing the type of the entry.
	 * May be one of file, link,
	 * or dir
	 */
	public function getType () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the entry is writable
	 * @link http://php.net/manual/en/splfileinfo.iswritable.php
	 * @return bool true if writable, false otherwise;
	 */
	public function isWritable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if file is readable
	 * @link http://php.net/manual/en/splfileinfo.isreadable.php
	 * @return bool true if readable, false otherwise.
	 */
	public function isReadable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is executable
	 * @link http://php.net/manual/en/splfileinfo.isexecutable.php
	 * @return bool true if executable, false otherwise.
	 */
	public function isExecutable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the object references a regular file
	 * @link http://php.net/manual/en/splfileinfo.isfile.php
	 * @return bool true if the file exists and is a regular file (not a link), false otherwise.
	 */
	public function isFile () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a directory
	 * @link http://php.net/manual/en/splfileinfo.isdir.php
	 * @return bool true if a directory, false otherwise.
	 */
	public function isDir () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a link
	 * @link http://php.net/manual/en/splfileinfo.islink.php
	 * @return bool true if the file is a link, false otherwise.
	 */
	public function isLink () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the target of a link
	 * @link http://php.net/manual/en/splfileinfo.getlinktarget.php
	 * @return string the target of the filesystem link.
	 */
	public function getLinkTarget () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets absolute path to file
	 * @link http://php.net/manual/en/splfileinfo.getrealpath.php
	 * @return string the path to the file.
	 */
	public function getRealPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the file
	 * @link http://php.net/manual/en/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use. 
	 * </p>
	 * @return SplFileInfo An SplFileInfo object created for the file.
	 */
	public function getFileInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the path
	 * @link http://php.net/manual/en/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use.
	 * </p>
	 * @return SplFileInfo an SplFileInfo object for the parent path of the file.
	 */
	public function getPathInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileObject object for the file
	 * @link http://php.net/manual/en/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * The mode for opening the file. See the fopen
	 * documentation for descriptions of possible modes. The default 
	 * is read only.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * &parameter.use_include_path;
	 * </p>
	 * @param resource $context [optional] <p>
	 * &parameter.context;
	 * </p>
	 * @return SplFileObject The opened file as an SplFileObject object.
	 */
	public function openFile ($open_mode = null, $use_include_path = null, $context = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class name used with <methodname>SplFileInfo::openFile</methodname>
	 * @link http://php.net/manual/en/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use when openFile() is called. 
	 * </p>
	 * @return void 
	 */
	public function setFileClass ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class used with getFileInfo and getPathInfo
	 * @link http://php.net/manual/en/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use.
	 * </p>
	 * @return void 
	 */
	public function setInfoClass ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Returns the path to the file as a string
	 * @link http://php.net/manual/en/splfileinfo.tostring.php
	 * @return void the path to the file.
	 */
	public function __toString () {}

}

/**
 * The DirectoryIterator class provides a simple interface for viewing
 * the contents of filesystem directories.
 * @link http://php.net/manual/en/class.directoryiterator.php
 */
class DirectoryIterator extends SplFileInfo implements Iterator, Traversable, SeekableIterator {

	/**
	 * (PHP 5)<br/>
	 * Constructs a new directory iterator from a path
	 * @link http://php.net/manual/en/directoryiterator.construct.php
	 * @param $path
	 */
	public function __construct ($path) {}

	/**
	 * (PHP 5)<br/>
	 * Return file name of current DirectoryIterator item.
	 * @link http://php.net/manual/en/directoryiterator.getfilename.php
	 * @return string the file name of the current DirectoryIterator item.
	 */
	public function getFilename () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Get base name of current DirectoryIterator item.
	 * @link http://php.net/manual/en/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * If the base name ends in suffix, 
	 * this will be cut.
	 * </p>
	 * @return string The base name of the current DirectoryIterator item.
	 */
	public function getBasename ($suffix = null) {}

	/**
	 * (PHP 5.1.0)<br/>
	 * Determine if current DirectoryIterator item is '.' or '..'
	 * @link http://php.net/manual/en/directoryiterator.isdot.php
	 * @return bool true if the entry is . or ..,
	 * otherwise false
	 */
	public function isDot () {}

	/**
	 * (PHP 5)<br/>
	 * Rewind the DirectoryIterator back to the start
	 * @link http://php.net/manual/en/directoryiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5)<br/>
	 * Check whether current DirectoryIterator position is a valid file
	 * @link http://php.net/manual/en/directoryiterator.valid.php
	 * @return bool true if the position is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5)<br/>
	 * Return the key for the current DirectoryIterator item
	 * @link http://php.net/manual/en/directoryiterator.key.php
	 * @return string The key for the current DirectoryIterator item.
	 */
	public function key () {}

	/**
	 * (PHP 5)<br/>
	 * Return the current DirectoryIterator item.
	 * @link http://php.net/manual/en/directoryiterator.current.php
	 * @return DirectoryIterator The current DirectoryIterator item.
	 */
	public function current () {}

	/**
	 * (PHP 5)<br/>
	 * Move forward to next DirectoryIterator item
	 * @link http://php.net/manual/en/directoryiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Seek to a DirectoryIterator item
	 * @link http://php.net/manual/en/directoryiterator.seek.php
	 * @param int $position <p>
	 * The zero-based numeric position to seek to.
	 * </p>
	 * @return void 
	 */
	public function seek ($position) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Get file name as a string
	 * @link http://php.net/manual/en/directoryiterator.tostring.php
	 * @return string the file name of the current DirectoryIterator item.
	 */
	public function __toString () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path without filename
	 * @link http://php.net/manual/en/splfileinfo.getpath.php
	 * @return string the path to the file.
	 */
	public function getPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path to the file
	 * @link http://php.net/manual/en/splfileinfo.getpathname.php
	 * @return string The path to the file.
	 */
	public function getPathname () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file permissions
	 * @link http://php.net/manual/en/splfileinfo.getperms.php
	 * @return int the file permissions.
	 */
	public function getPerms () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode for the file
	 * @link http://php.net/manual/en/splfileinfo.getinode.php
	 * @return int the inode number for the filesystem object.
	 */
	public function getInode () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file size
	 * @link http://php.net/manual/en/splfileinfo.getsize.php
	 * @return int The filesize in bytes.
	 */
	public function getSize () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the owner of the file
	 * @link http://php.net/manual/en/splfileinfo.getowner.php
	 * @return int The owner id in numerical format.
	 */
	public function getOwner () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the file group
	 * @link http://php.net/manual/en/splfileinfo.getgroup.php
	 * @return int The group id in numerical format.
	 */
	public function getGroup () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets last access time of the file
	 * @link http://php.net/manual/en/splfileinfo.getatime.php
	 * @return int the time the file was last accessed.
	 */
	public function getATime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the last modified time
	 * @link http://php.net/manual/en/splfileinfo.getmtime.php
	 * @return int the last modified time for the file, in a Unix timestamp.
	 */
	public function getMTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode change time
	 * @link http://php.net/manual/en/splfileinfo.getctime.php
	 * @return int The last change time, in a Unix timestamp.
	 */
	public function getCTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file type
	 * @link http://php.net/manual/en/splfileinfo.gettype.php
	 * @return string A string representing the type of the entry.
	 * May be one of file, link,
	 * or dir
	 */
	public function getType () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the entry is writable
	 * @link http://php.net/manual/en/splfileinfo.iswritable.php
	 * @return bool true if writable, false otherwise;
	 */
	public function isWritable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if file is readable
	 * @link http://php.net/manual/en/splfileinfo.isreadable.php
	 * @return bool true if readable, false otherwise.
	 */
	public function isReadable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is executable
	 * @link http://php.net/manual/en/splfileinfo.isexecutable.php
	 * @return bool true if executable, false otherwise.
	 */
	public function isExecutable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the object references a regular file
	 * @link http://php.net/manual/en/splfileinfo.isfile.php
	 * @return bool true if the file exists and is a regular file (not a link), false otherwise.
	 */
	public function isFile () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a directory
	 * @link http://php.net/manual/en/splfileinfo.isdir.php
	 * @return bool true if a directory, false otherwise.
	 */
	public function isDir () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a link
	 * @link http://php.net/manual/en/splfileinfo.islink.php
	 * @return bool true if the file is a link, false otherwise.
	 */
	public function isLink () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the target of a link
	 * @link http://php.net/manual/en/splfileinfo.getlinktarget.php
	 * @return string the target of the filesystem link.
	 */
	public function getLinkTarget () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets absolute path to file
	 * @link http://php.net/manual/en/splfileinfo.getrealpath.php
	 * @return string the path to the file.
	 */
	public function getRealPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the file
	 * @link http://php.net/manual/en/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use. 
	 * </p>
	 * @return SplFileInfo An SplFileInfo object created for the file.
	 */
	public function getFileInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the path
	 * @link http://php.net/manual/en/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use.
	 * </p>
	 * @return SplFileInfo an SplFileInfo object for the parent path of the file.
	 */
	public function getPathInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileObject object for the file
	 * @link http://php.net/manual/en/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * The mode for opening the file. See the fopen
	 * documentation for descriptions of possible modes. The default 
	 * is read only.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * &parameter.use_include_path;
	 * </p>
	 * @param resource $context [optional] <p>
	 * &parameter.context;
	 * </p>
	 * @return SplFileObject The opened file as an SplFileObject object.
	 */
	public function openFile ($open_mode = null, $use_include_path = null, $context = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class name used with <methodname>SplFileInfo::openFile</methodname>
	 * @link http://php.net/manual/en/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use when openFile() is called. 
	 * </p>
	 * @return void 
	 */
	public function setFileClass ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class used with getFileInfo and getPathInfo
	 * @link http://php.net/manual/en/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use.
	 * </p>
	 * @return void 
	 */
	public function setInfoClass ($class_name = null) {}

}

/**
 * The Filesystem iterator
 * @link http://php.net/manual/en/class.filesystemiterator.php
 */
class FilesystemIterator extends DirectoryIterator implements SeekableIterator, Traversable, Iterator {
	const CURRENT_MODE_MASK = 240;
	const CURRENT_AS_PATHNAME = 32;
	const CURRENT_AS_FILEINFO = 0;
	const CURRENT_AS_SELF = 16;
	const KEY_MODE_MASK = 3840;
	const KEY_AS_PATHNAME = 0;
	const FOLLOW_SYMLINKS = 512;
	const KEY_AS_FILENAME = 256;
	const NEW_CURRENT_AND_KEY = 256;
	const SKIP_DOTS = 4096;
	const UNIX_PATHS = 8192;


	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Constructs a new filesystem iterator
	 * @link http://php.net/manual/en/filesystemiterator.construct.php
	 * @param $path
	 * @param $flags [optional]
	 */
	public function __construct ($path, $flags) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewinds back to the beginning
	 * @link http://php.net/manual/en/filesystemiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to the next file
	 * @link http://php.net/manual/en/filesystemiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Retrieve the key for the current file
	 * @link http://php.net/manual/en/filesystemiterator.key.php
	 * @return string the pathname or filename depending on the set flags.
	 * See the FilesystemIterator constants.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * The current file
	 * @link http://php.net/manual/en/filesystemiterator.current.php
	 * @return mixed The filename, file information, or $this depending on the set flags.
	 * See the FilesystemIterator constants.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get the handling flags
	 * @link http://php.net/manual/en/filesystemiterator.getflags.php
	 * @return int The integer value of the set flags.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets handling flags
	 * @link http://php.net/manual/en/filesystemiterator.setflags.php
	 * @param int $flags [optional] <p>
	 * The handling flags to set.
	 * See the FilesystemIterator constants.
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags = null) {}

	/**
	 * (PHP 5)<br/>
	 * Return file name of current DirectoryIterator item.
	 * @link http://php.net/manual/en/directoryiterator.getfilename.php
	 * @return string the file name of the current DirectoryIterator item.
	 */
	public function getFilename () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Get base name of current DirectoryIterator item.
	 * @link http://php.net/manual/en/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * If the base name ends in suffix, 
	 * this will be cut.
	 * </p>
	 * @return string The base name of the current DirectoryIterator item.
	 */
	public function getBasename ($suffix = null) {}

	/**
	 * (PHP 5.1.0)<br/>
	 * Determine if current DirectoryIterator item is '.' or '..'
	 * @link http://php.net/manual/en/directoryiterator.isdot.php
	 * @return bool true if the entry is . or ..,
	 * otherwise false
	 */
	public function isDot () {}

	/**
	 * (PHP 5)<br/>
	 * Check whether current DirectoryIterator position is a valid file
	 * @link http://php.net/manual/en/directoryiterator.valid.php
	 * @return bool true if the position is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Seek to a DirectoryIterator item
	 * @link http://php.net/manual/en/directoryiterator.seek.php
	 * @param int $position <p>
	 * The zero-based numeric position to seek to.
	 * </p>
	 * @return void 
	 */
	public function seek ($position) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Get file name as a string
	 * @link http://php.net/manual/en/directoryiterator.tostring.php
	 * @return string the file name of the current DirectoryIterator item.
	 */
	public function __toString () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path without filename
	 * @link http://php.net/manual/en/splfileinfo.getpath.php
	 * @return string the path to the file.
	 */
	public function getPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path to the file
	 * @link http://php.net/manual/en/splfileinfo.getpathname.php
	 * @return string The path to the file.
	 */
	public function getPathname () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file permissions
	 * @link http://php.net/manual/en/splfileinfo.getperms.php
	 * @return int the file permissions.
	 */
	public function getPerms () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode for the file
	 * @link http://php.net/manual/en/splfileinfo.getinode.php
	 * @return int the inode number for the filesystem object.
	 */
	public function getInode () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file size
	 * @link http://php.net/manual/en/splfileinfo.getsize.php
	 * @return int The filesize in bytes.
	 */
	public function getSize () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the owner of the file
	 * @link http://php.net/manual/en/splfileinfo.getowner.php
	 * @return int The owner id in numerical format.
	 */
	public function getOwner () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the file group
	 * @link http://php.net/manual/en/splfileinfo.getgroup.php
	 * @return int The group id in numerical format.
	 */
	public function getGroup () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets last access time of the file
	 * @link http://php.net/manual/en/splfileinfo.getatime.php
	 * @return int the time the file was last accessed.
	 */
	public function getATime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the last modified time
	 * @link http://php.net/manual/en/splfileinfo.getmtime.php
	 * @return int the last modified time for the file, in a Unix timestamp.
	 */
	public function getMTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode change time
	 * @link http://php.net/manual/en/splfileinfo.getctime.php
	 * @return int The last change time, in a Unix timestamp.
	 */
	public function getCTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file type
	 * @link http://php.net/manual/en/splfileinfo.gettype.php
	 * @return string A string representing the type of the entry.
	 * May be one of file, link,
	 * or dir
	 */
	public function getType () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the entry is writable
	 * @link http://php.net/manual/en/splfileinfo.iswritable.php
	 * @return bool true if writable, false otherwise;
	 */
	public function isWritable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if file is readable
	 * @link http://php.net/manual/en/splfileinfo.isreadable.php
	 * @return bool true if readable, false otherwise.
	 */
	public function isReadable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is executable
	 * @link http://php.net/manual/en/splfileinfo.isexecutable.php
	 * @return bool true if executable, false otherwise.
	 */
	public function isExecutable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the object references a regular file
	 * @link http://php.net/manual/en/splfileinfo.isfile.php
	 * @return bool true if the file exists and is a regular file (not a link), false otherwise.
	 */
	public function isFile () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a directory
	 * @link http://php.net/manual/en/splfileinfo.isdir.php
	 * @return bool true if a directory, false otherwise.
	 */
	public function isDir () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a link
	 * @link http://php.net/manual/en/splfileinfo.islink.php
	 * @return bool true if the file is a link, false otherwise.
	 */
	public function isLink () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the target of a link
	 * @link http://php.net/manual/en/splfileinfo.getlinktarget.php
	 * @return string the target of the filesystem link.
	 */
	public function getLinkTarget () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets absolute path to file
	 * @link http://php.net/manual/en/splfileinfo.getrealpath.php
	 * @return string the path to the file.
	 */
	public function getRealPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the file
	 * @link http://php.net/manual/en/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use. 
	 * </p>
	 * @return SplFileInfo An SplFileInfo object created for the file.
	 */
	public function getFileInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the path
	 * @link http://php.net/manual/en/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use.
	 * </p>
	 * @return SplFileInfo an SplFileInfo object for the parent path of the file.
	 */
	public function getPathInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileObject object for the file
	 * @link http://php.net/manual/en/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * The mode for opening the file. See the fopen
	 * documentation for descriptions of possible modes. The default 
	 * is read only.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * &parameter.use_include_path;
	 * </p>
	 * @param resource $context [optional] <p>
	 * &parameter.context;
	 * </p>
	 * @return SplFileObject The opened file as an SplFileObject object.
	 */
	public function openFile ($open_mode = null, $use_include_path = null, $context = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class name used with <methodname>SplFileInfo::openFile</methodname>
	 * @link http://php.net/manual/en/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use when openFile() is called. 
	 * </p>
	 * @return void 
	 */
	public function setFileClass ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class used with getFileInfo and getPathInfo
	 * @link http://php.net/manual/en/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use.
	 * </p>
	 * @return void 
	 */
	public function setInfoClass ($class_name = null) {}

}

/**
 * ...
 * @link http://php.net/manual/en/class.recursivedirectoryiterator.php
 */
class RecursiveDirectoryIterator extends FilesystemIterator implements Iterator, Traversable, SeekableIterator, RecursiveIterator {
	const CURRENT_MODE_MASK = 240;
	const CURRENT_AS_PATHNAME = 32;
	const CURRENT_AS_FILEINFO = 0;
	const CURRENT_AS_SELF = 16;
	const KEY_MODE_MASK = 3840;
	const KEY_AS_PATHNAME = 0;
	const FOLLOW_SYMLINKS = 512;
	const KEY_AS_FILENAME = 256;
	const NEW_CURRENT_AND_KEY = 256;
	const SKIP_DOTS = 4096;
	const UNIX_PATHS = 8192;


	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Constructs a RecursiveDirectoryIterator
	 * @link http://php.net/manual/en/recursivedirectoryiterator.construct.php
	 * @param $path
	 * @param $flags [optional]
	 */
	public function __construct ($path, $flags) {}

	/**
	 * (PHP 5)<br/>
	 * Returns whether current entry is a directory and not '.' or '..'
	 * @link http://php.net/manual/en/recursivedirectoryiterator.haschildren.php
	 * @param bool $allow_links [optional] <p>
	 * </p>
	 * @return bool whether the current entry is a directory, but not '.' or '..'
	 */
	public function hasChildren ($allow_links = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns an iterator for the current entry if it is a directory
	 * @link http://php.net/manual/en/recursivedirectoryiterator.getchildren.php
	 * @return object An iterator for the current entry, if it is a directory.
	 */
	public function getChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get sub path
	 * @link http://php.net/manual/en/recursivedirectoryiterator.getsubpath.php
	 * @return string The sub path (sub directory).
	 */
	public function getSubPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get sub path and name
	 * @link http://php.net/manual/en/recursivedirectoryiterator.getsubpathname.php
	 * @return string The sub path (sub directory) and filename.
	 */
	public function getSubPathname () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewinds back to the beginning
	 * @link http://php.net/manual/en/filesystemiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to the next file
	 * @link http://php.net/manual/en/filesystemiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Retrieve the key for the current file
	 * @link http://php.net/manual/en/filesystemiterator.key.php
	 * @return string the pathname or filename depending on the set flags.
	 * See the FilesystemIterator constants.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * The current file
	 * @link http://php.net/manual/en/filesystemiterator.current.php
	 * @return mixed The filename, file information, or $this depending on the set flags.
	 * See the FilesystemIterator constants.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get the handling flags
	 * @link http://php.net/manual/en/filesystemiterator.getflags.php
	 * @return int The integer value of the set flags.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets handling flags
	 * @link http://php.net/manual/en/filesystemiterator.setflags.php
	 * @param int $flags [optional] <p>
	 * The handling flags to set.
	 * See the FilesystemIterator constants.
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags = null) {}

	/**
	 * (PHP 5)<br/>
	 * Return file name of current DirectoryIterator item.
	 * @link http://php.net/manual/en/directoryiterator.getfilename.php
	 * @return string the file name of the current DirectoryIterator item.
	 */
	public function getFilename () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Get base name of current DirectoryIterator item.
	 * @link http://php.net/manual/en/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * If the base name ends in suffix, 
	 * this will be cut.
	 * </p>
	 * @return string The base name of the current DirectoryIterator item.
	 */
	public function getBasename ($suffix = null) {}

	/**
	 * (PHP 5.1.0)<br/>
	 * Determine if current DirectoryIterator item is '.' or '..'
	 * @link http://php.net/manual/en/directoryiterator.isdot.php
	 * @return bool true if the entry is . or ..,
	 * otherwise false
	 */
	public function isDot () {}

	/**
	 * (PHP 5)<br/>
	 * Check whether current DirectoryIterator position is a valid file
	 * @link http://php.net/manual/en/directoryiterator.valid.php
	 * @return bool true if the position is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Seek to a DirectoryIterator item
	 * @link http://php.net/manual/en/directoryiterator.seek.php
	 * @param int $position <p>
	 * The zero-based numeric position to seek to.
	 * </p>
	 * @return void 
	 */
	public function seek ($position) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Get file name as a string
	 * @link http://php.net/manual/en/directoryiterator.tostring.php
	 * @return string the file name of the current DirectoryIterator item.
	 */
	public function __toString () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path without filename
	 * @link http://php.net/manual/en/splfileinfo.getpath.php
	 * @return string the path to the file.
	 */
	public function getPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path to the file
	 * @link http://php.net/manual/en/splfileinfo.getpathname.php
	 * @return string The path to the file.
	 */
	public function getPathname () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file permissions
	 * @link http://php.net/manual/en/splfileinfo.getperms.php
	 * @return int the file permissions.
	 */
	public function getPerms () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode for the file
	 * @link http://php.net/manual/en/splfileinfo.getinode.php
	 * @return int the inode number for the filesystem object.
	 */
	public function getInode () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file size
	 * @link http://php.net/manual/en/splfileinfo.getsize.php
	 * @return int The filesize in bytes.
	 */
	public function getSize () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the owner of the file
	 * @link http://php.net/manual/en/splfileinfo.getowner.php
	 * @return int The owner id in numerical format.
	 */
	public function getOwner () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the file group
	 * @link http://php.net/manual/en/splfileinfo.getgroup.php
	 * @return int The group id in numerical format.
	 */
	public function getGroup () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets last access time of the file
	 * @link http://php.net/manual/en/splfileinfo.getatime.php
	 * @return int the time the file was last accessed.
	 */
	public function getATime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the last modified time
	 * @link http://php.net/manual/en/splfileinfo.getmtime.php
	 * @return int the last modified time for the file, in a Unix timestamp.
	 */
	public function getMTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode change time
	 * @link http://php.net/manual/en/splfileinfo.getctime.php
	 * @return int The last change time, in a Unix timestamp.
	 */
	public function getCTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file type
	 * @link http://php.net/manual/en/splfileinfo.gettype.php
	 * @return string A string representing the type of the entry.
	 * May be one of file, link,
	 * or dir
	 */
	public function getType () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the entry is writable
	 * @link http://php.net/manual/en/splfileinfo.iswritable.php
	 * @return bool true if writable, false otherwise;
	 */
	public function isWritable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if file is readable
	 * @link http://php.net/manual/en/splfileinfo.isreadable.php
	 * @return bool true if readable, false otherwise.
	 */
	public function isReadable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is executable
	 * @link http://php.net/manual/en/splfileinfo.isexecutable.php
	 * @return bool true if executable, false otherwise.
	 */
	public function isExecutable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the object references a regular file
	 * @link http://php.net/manual/en/splfileinfo.isfile.php
	 * @return bool true if the file exists and is a regular file (not a link), false otherwise.
	 */
	public function isFile () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a directory
	 * @link http://php.net/manual/en/splfileinfo.isdir.php
	 * @return bool true if a directory, false otherwise.
	 */
	public function isDir () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a link
	 * @link http://php.net/manual/en/splfileinfo.islink.php
	 * @return bool true if the file is a link, false otherwise.
	 */
	public function isLink () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the target of a link
	 * @link http://php.net/manual/en/splfileinfo.getlinktarget.php
	 * @return string the target of the filesystem link.
	 */
	public function getLinkTarget () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets absolute path to file
	 * @link http://php.net/manual/en/splfileinfo.getrealpath.php
	 * @return string the path to the file.
	 */
	public function getRealPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the file
	 * @link http://php.net/manual/en/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use. 
	 * </p>
	 * @return SplFileInfo An SplFileInfo object created for the file.
	 */
	public function getFileInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the path
	 * @link http://php.net/manual/en/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use.
	 * </p>
	 * @return SplFileInfo an SplFileInfo object for the parent path of the file.
	 */
	public function getPathInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileObject object for the file
	 * @link http://php.net/manual/en/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * The mode for opening the file. See the fopen
	 * documentation for descriptions of possible modes. The default 
	 * is read only.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * &parameter.use_include_path;
	 * </p>
	 * @param resource $context [optional] <p>
	 * &parameter.context;
	 * </p>
	 * @return SplFileObject The opened file as an SplFileObject object.
	 */
	public function openFile ($open_mode = null, $use_include_path = null, $context = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class name used with <methodname>SplFileInfo::openFile</methodname>
	 * @link http://php.net/manual/en/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use when openFile() is called. 
	 * </p>
	 * @return void 
	 */
	public function setFileClass ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class used with getFileInfo and getPathInfo
	 * @link http://php.net/manual/en/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use.
	 * </p>
	 * @return void 
	 */
	public function setInfoClass ($class_name = null) {}

}

/**
 * Iterates through a file system in a similar fashion to 
 * glob.
 * @link http://php.net/manual/en/class.globiterator.php
 */
class GlobIterator extends FilesystemIterator implements Iterator, Traversable, SeekableIterator, Countable {
	const CURRENT_MODE_MASK = 240;
	const CURRENT_AS_PATHNAME = 32;
	const CURRENT_AS_FILEINFO = 0;
	const CURRENT_AS_SELF = 16;
	const KEY_MODE_MASK = 3840;
	const KEY_AS_PATHNAME = 0;
	const FOLLOW_SYMLINKS = 512;
	const KEY_AS_FILENAME = 256;
	const NEW_CURRENT_AND_KEY = 256;
	const SKIP_DOTS = 4096;
	const UNIX_PATHS = 8192;


	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Construct a directory using glob
	 * @link http://php.net/manual/en/globiterator.construct.php
	 * @param $path
	 * @param $flags [optional]
	 */
	public function __construct ($path, $flags) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get the number of directories and files
	 * @link http://php.net/manual/en/globiterator.count.php
	 * @return integer The number of returned directories and files, as an
	 * integer.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewinds back to the beginning
	 * @link http://php.net/manual/en/filesystemiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to the next file
	 * @link http://php.net/manual/en/filesystemiterator.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Retrieve the key for the current file
	 * @link http://php.net/manual/en/filesystemiterator.key.php
	 * @return string the pathname or filename depending on the set flags.
	 * See the FilesystemIterator constants.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * The current file
	 * @link http://php.net/manual/en/filesystemiterator.current.php
	 * @return mixed The filename, file information, or $this depending on the set flags.
	 * See the FilesystemIterator constants.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Get the handling flags
	 * @link http://php.net/manual/en/filesystemiterator.getflags.php
	 * @return int The integer value of the set flags.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets handling flags
	 * @link http://php.net/manual/en/filesystemiterator.setflags.php
	 * @param int $flags [optional] <p>
	 * The handling flags to set.
	 * See the FilesystemIterator constants.
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags = null) {}

	/**
	 * (PHP 5)<br/>
	 * Return file name of current DirectoryIterator item.
	 * @link http://php.net/manual/en/directoryiterator.getfilename.php
	 * @return string the file name of the current DirectoryIterator item.
	 */
	public function getFilename () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Get base name of current DirectoryIterator item.
	 * @link http://php.net/manual/en/directoryiterator.getbasename.php
	 * @param string $suffix [optional] <p>
	 * If the base name ends in suffix, 
	 * this will be cut.
	 * </p>
	 * @return string The base name of the current DirectoryIterator item.
	 */
	public function getBasename ($suffix = null) {}

	/**
	 * (PHP 5.1.0)<br/>
	 * Determine if current DirectoryIterator item is '.' or '..'
	 * @link http://php.net/manual/en/directoryiterator.isdot.php
	 * @return bool true if the entry is . or ..,
	 * otherwise false
	 */
	public function isDot () {}

	/**
	 * (PHP 5)<br/>
	 * Check whether current DirectoryIterator position is a valid file
	 * @link http://php.net/manual/en/directoryiterator.valid.php
	 * @return bool true if the position is valid, otherwise false
	 */
	public function valid () {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Seek to a DirectoryIterator item
	 * @link http://php.net/manual/en/directoryiterator.seek.php
	 * @param int $position <p>
	 * The zero-based numeric position to seek to.
	 * </p>
	 * @return void 
	 */
	public function seek ($position) {}

	/**
	 * (No version information available, might only be in SVN)<br/>
	 * Get file name as a string
	 * @link http://php.net/manual/en/directoryiterator.tostring.php
	 * @return string the file name of the current DirectoryIterator item.
	 */
	public function __toString () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path without filename
	 * @link http://php.net/manual/en/splfileinfo.getpath.php
	 * @return string the path to the file.
	 */
	public function getPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path to the file
	 * @link http://php.net/manual/en/splfileinfo.getpathname.php
	 * @return string The path to the file.
	 */
	public function getPathname () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file permissions
	 * @link http://php.net/manual/en/splfileinfo.getperms.php
	 * @return int the file permissions.
	 */
	public function getPerms () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode for the file
	 * @link http://php.net/manual/en/splfileinfo.getinode.php
	 * @return int the inode number for the filesystem object.
	 */
	public function getInode () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file size
	 * @link http://php.net/manual/en/splfileinfo.getsize.php
	 * @return int The filesize in bytes.
	 */
	public function getSize () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the owner of the file
	 * @link http://php.net/manual/en/splfileinfo.getowner.php
	 * @return int The owner id in numerical format.
	 */
	public function getOwner () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the file group
	 * @link http://php.net/manual/en/splfileinfo.getgroup.php
	 * @return int The group id in numerical format.
	 */
	public function getGroup () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets last access time of the file
	 * @link http://php.net/manual/en/splfileinfo.getatime.php
	 * @return int the time the file was last accessed.
	 */
	public function getATime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the last modified time
	 * @link http://php.net/manual/en/splfileinfo.getmtime.php
	 * @return int the last modified time for the file, in a Unix timestamp.
	 */
	public function getMTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode change time
	 * @link http://php.net/manual/en/splfileinfo.getctime.php
	 * @return int The last change time, in a Unix timestamp.
	 */
	public function getCTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file type
	 * @link http://php.net/manual/en/splfileinfo.gettype.php
	 * @return string A string representing the type of the entry.
	 * May be one of file, link,
	 * or dir
	 */
	public function getType () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the entry is writable
	 * @link http://php.net/manual/en/splfileinfo.iswritable.php
	 * @return bool true if writable, false otherwise;
	 */
	public function isWritable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if file is readable
	 * @link http://php.net/manual/en/splfileinfo.isreadable.php
	 * @return bool true if readable, false otherwise.
	 */
	public function isReadable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is executable
	 * @link http://php.net/manual/en/splfileinfo.isexecutable.php
	 * @return bool true if executable, false otherwise.
	 */
	public function isExecutable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the object references a regular file
	 * @link http://php.net/manual/en/splfileinfo.isfile.php
	 * @return bool true if the file exists and is a regular file (not a link), false otherwise.
	 */
	public function isFile () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a directory
	 * @link http://php.net/manual/en/splfileinfo.isdir.php
	 * @return bool true if a directory, false otherwise.
	 */
	public function isDir () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a link
	 * @link http://php.net/manual/en/splfileinfo.islink.php
	 * @return bool true if the file is a link, false otherwise.
	 */
	public function isLink () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the target of a link
	 * @link http://php.net/manual/en/splfileinfo.getlinktarget.php
	 * @return string the target of the filesystem link.
	 */
	public function getLinkTarget () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets absolute path to file
	 * @link http://php.net/manual/en/splfileinfo.getrealpath.php
	 * @return string the path to the file.
	 */
	public function getRealPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the file
	 * @link http://php.net/manual/en/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use. 
	 * </p>
	 * @return SplFileInfo An SplFileInfo object created for the file.
	 */
	public function getFileInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the path
	 * @link http://php.net/manual/en/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use.
	 * </p>
	 * @return SplFileInfo an SplFileInfo object for the parent path of the file.
	 */
	public function getPathInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileObject object for the file
	 * @link http://php.net/manual/en/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * The mode for opening the file. See the fopen
	 * documentation for descriptions of possible modes. The default 
	 * is read only.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * &parameter.use_include_path;
	 * </p>
	 * @param resource $context [optional] <p>
	 * &parameter.context;
	 * </p>
	 * @return SplFileObject The opened file as an SplFileObject object.
	 */
	public function openFile ($open_mode = null, $use_include_path = null, $context = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class name used with <methodname>SplFileInfo::openFile</methodname>
	 * @link http://php.net/manual/en/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use when openFile() is called. 
	 * </p>
	 * @return void 
	 */
	public function setFileClass ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class used with getFileInfo and getPathInfo
	 * @link http://php.net/manual/en/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use.
	 * </p>
	 * @return void 
	 */
	public function setInfoClass ($class_name = null) {}

}

/**
 * The SplFileObject class offers an object oriented interface for a file.
 * @link http://php.net/manual/en/class.splfileobject.php
 */
class SplFileObject extends SplFileInfo implements RecursiveIterator, Traversable, Iterator, SeekableIterator {
	const DROP_NEW_LINE = 1;
	const READ_AHEAD = 2;
	const SKIP_EMPTY = 6;
	const READ_CSV = 8;


	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Construct a new file object.
	 * @link http://php.net/manual/en/splfileobject.construct.php
	 * @param $file_name
	 * @param $open_mode [optional]
	 * @param $use_include_path [optional]
	 * @param $context [optional]
	 */
	public function __construct ($file_name, $open_mode, $use_include_path, $context) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the file to the first line
	 * @link http://php.net/manual/en/splfileobject.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Reached end of file
	 * @link http://php.net/manual/en/splfileobject.eof.php
	 * @return boolean true if file is at EOF, false otherwise.
	 */
	public function eof () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Not at EOF
	 * @link http://php.net/manual/en/splfileobject.valid.php
	 * @return bool true if not reached EOF, false otherwise.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets line from file
	 * @link http://php.net/manual/en/splfileobject.fgets.php
	 * @return string a string containing the next line from the file, or false on error.
	 */
	public function fgets () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets line from file and parse as CSV fields
	 * @link http://php.net/manual/en/splfileobject.fgetcsv.php
	 * @param string $delimiter [optional] <p>
	 * The field delimiter (one character only). Defaults as a comma or the value set using SplFileObject::setCsvControl.
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * The field enclosure character (one character only). Defaults as a double quotation mark or the value set using SplFileObject::setCsvControl.
	 * </p>
	 * @param string $escape [optional] <p>
	 * The escape character (one character only). Defaults as a backslash (\) or the value set using SplFileObject::setCsvControl.
	 * </p>
	 * @return array an indexed array containing the fields read, or false on error.
	 * </p>
	 * <p>
	 * A blank line in a CSV file will be returned as an array
	 * comprising a single &null; field unless using SplFileInfo::SKIP_EMPTY | SplFileInfo::DROP_NEW_LINE, 
	 * in which case empty lines are skipped.
	 */
	public function fgetcsv ($delimiter = null, $enclosure = null, $escape = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Set the delimiter and enclosure character for CSV
	 * @link http://php.net/manual/en/splfileobject.setcsvcontrol.php
	 * @param string $delimiter [optional] <p>
	 * The field delimiter (one character only).
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * The field enclosure character (one character only).
	 * </p>
	 * @param string $escape [optional] <p>
	 * The field escape character (one character only).
	 * </p>
	 * @return void 
	 */
	public function setCsvControl ($delimiter = null, $enclosure = null, $escape = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Get the delimiter and enclosure character for CSV
	 * @link http://php.net/manual/en/splfileobject.getcsvcontrol.php
	 * @return array an indexed array containing the delimiter and enclosure character.
	 */
	public function getCsvControl () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Portable file locking
	 * @link http://php.net/manual/en/splfileobject.flock.php
	 * @param int $operation <p>
	 * operation is one of the following:
	 * LOCK_SH to acquire a shared lock (reader).
	 * @param int $wouldblock [optional] <p>
	 * Set to true if the lock would block (EWOULDBLOCK errno condition).
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function flock ($operation, &$wouldblock = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Flushes the output to the file
	 * @link http://php.net/manual/en/splfileobject.fflush.php
	 * @return boolean Returns true on success or false on failure.
	 */
	public function fflush () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return current file position
	 * @link http://php.net/manual/en/splfileobject.ftell.php
	 * @return int the position of the file pointer as an integer, or false on error.
	 */
	public function ftell () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Seek to a position
	 * @link http://php.net/manual/en/splfileobject.fseek.php
	 * @param int $offset <p>
	 * The offset. A negative value can be used to move backwards through the file which
	 * is useful when SEEK_END is used as the whence value.
	 * </p>
	 * @param int $whence [optional] <p>
	 * whence values are:
	 * SEEK_SET - Set position equal to offset bytes.
	 * SEEK_CUR - Set position to current location plus offset.
	 * SEEK_END - Set position to end-of-file plus offset.
	 * </p>
	 * <p>
	 * If whence is not specified, it is assumed to be SEEK_SET.
	 * </p>
	 * @return int 0 if the seek was successful, -1 otherwise. Note that seeking
	 * past EOF is not considered an error.
	 */
	public function fseek ($offset, $whence = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets character from file
	 * @link http://php.net/manual/en/splfileobject.fgetc.php
	 * @return string a string containing a single character read from the file or false on EOF.
	 */
	public function fgetc () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Output all remaining data on a file pointer
	 * @link http://php.net/manual/en/splfileobject.fpassthru.php
	 * @return int the number of characters read from handle
	 * and passed through to the output.
	 */
	public function fpassthru () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets line from file and strip HTML tags
	 * @link http://php.net/manual/en/splfileobject.fgetss.php
	 * @param string $allowable_tags [optional] <p>
	 * You can use the optional third parameter to specify tags which should
	 * not be stripped.
	 * </p>
	 * @return string a string containing the next line of the file with HTML and PHP
	 * code stripped, or false on error.
	 */
	public function fgetss ($allowable_tags = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Parses input from file according to a format
	 * @link http://php.net/manual/en/splfileobject.fscanf.php
	 * @param string $format <p>
	 * The specified format as described in the sprintf documentation.
	 * </p>
	 * @param mixed $_ [optional] 
	 * @return mixed If only two parameters were passed to this method, the values parsed will be
	 * returned as an array. Otherwise, if optional parameters are passed, the
	 * function will return the number of assigned values. The optional
	 * parameters must be passed by reference.
	 */
	public function fscanf ($format, &$_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Write to file
	 * @link http://php.net/manual/en/splfileobject.fwrite.php
	 * @param string $str <p>
	 * The string to be written to the file.
	 * </p>
	 * @param int $length [optional] <p>
	 * If the length argument is given, writing will
	 * stop after length bytes have been written or
	 * the end of string is reached, whichever comes
	 * first.
	 * </p>
	 * @return int the number of bytes written, or &null; on error.
	 */
	public function fwrite ($str, $length = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets information about the file
	 * @link http://php.net/manual/en/splfileobject.fstat.php
	 * @return array an array with the statistics of the file; the format of the array
	 * is described in detail on the stat manual page.
	 */
	public function fstat () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Truncates the file to a given length
	 * @link http://php.net/manual/en/splfileobject.ftruncate.php
	 * @param int $size <p>
	 * The size to truncate to.
	 * </p>
	 * <p>
	 * If size is larger than the file it is extended with null bytes.
	 * </p>
	 * <p>
	 * If size is smaller than the file, the extra data will be lost.
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function ftruncate ($size) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Retrieve current line of file
	 * @link http://php.net/manual/en/splfileobject.current.php
	 * @return string|array Retrieves the current line of the file. If the SplFileObject::READ_CSV flag is set, this method returns an array containing the current line parsed as CSV data.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get line number
	 * @link http://php.net/manual/en/splfileobject.key.php
	 * @return int the current line number.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Read next line
	 * @link http://php.net/manual/en/splfileobject.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Sets flags for the SplFileObject
	 * @link http://php.net/manual/en/splfileobject.setflags.php
	 * @param int $flags <p>
	 * Bit mask of the flags to set. See 
	 * SplFileObject constants 
	 * for the available flags.
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets flags for the SplFileObject
	 * @link http://php.net/manual/en/splfileobject.getflags.php
	 * @return int an integer representing the flags.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Set maximum line length
	 * @link http://php.net/manual/en/splfileobject.setmaxlinelen.php
	 * @param int $max_len <p>
	 * The maximum length of a line.
	 * </p>
	 * @return void 
	 */
	public function setMaxLineLen ($max_len) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get maximum line length
	 * @link http://php.net/manual/en/splfileobject.getmaxlinelen.php
	 * @return int the maximum line length if one has been set with
	 * SplFileObject::setMaxLineLen, default is 0.
	 */
	public function getMaxLineLen () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * SplFileObject does not have children
	 * @link http://php.net/manual/en/splfileobject.haschildren.php
	 * @return bool false
	 */
	public function hasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * No purpose
	 * @link http://php.net/manual/en/splfileobject.getchildren.php
	 * @return void 
	 */
	public function getChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Seek to specified line
	 * @link http://php.net/manual/en/splfileobject.seek.php
	 * @param int $line_pos <p>
	 * The zero-based line number to seek to.
	 * </p>
	 * @return void 
	 */
	public function seek ($line_pos) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Alias of <methodname>SplFileObject::fgets</methodname>
	 * @link http://php.net/manual/en/splfileobject.getcurrentline.php
	 */
	public function getCurrentLine () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Alias of <methodname>SplFileObject::current</methodname>
	 * @link http://php.net/manual/en/splfileobject.tostring.php
	 */
	public function __toString () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path without filename
	 * @link http://php.net/manual/en/splfileinfo.getpath.php
	 * @return string the path to the file.
	 */
	public function getPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the filename
	 * @link http://php.net/manual/en/splfileinfo.getfilename.php
	 * @return string The filename.
	 */
	public function getFilename () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the base name of the file
	 * @link http://php.net/manual/en/splfileinfo.getbasename.php
	 * @param string $suffix [optional] <p>
	 * Optional suffix to omit from the base name returned.
	 * </p>
	 * @return string the base name without path information.
	 */
	public function getBasename ($suffix = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path to the file
	 * @link http://php.net/manual/en/splfileinfo.getpathname.php
	 * @return string The path to the file.
	 */
	public function getPathname () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file permissions
	 * @link http://php.net/manual/en/splfileinfo.getperms.php
	 * @return int the file permissions.
	 */
	public function getPerms () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode for the file
	 * @link http://php.net/manual/en/splfileinfo.getinode.php
	 * @return int the inode number for the filesystem object.
	 */
	public function getInode () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file size
	 * @link http://php.net/manual/en/splfileinfo.getsize.php
	 * @return int The filesize in bytes.
	 */
	public function getSize () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the owner of the file
	 * @link http://php.net/manual/en/splfileinfo.getowner.php
	 * @return int The owner id in numerical format.
	 */
	public function getOwner () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the file group
	 * @link http://php.net/manual/en/splfileinfo.getgroup.php
	 * @return int The group id in numerical format.
	 */
	public function getGroup () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets last access time of the file
	 * @link http://php.net/manual/en/splfileinfo.getatime.php
	 * @return int the time the file was last accessed.
	 */
	public function getATime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the last modified time
	 * @link http://php.net/manual/en/splfileinfo.getmtime.php
	 * @return int the last modified time for the file, in a Unix timestamp.
	 */
	public function getMTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode change time
	 * @link http://php.net/manual/en/splfileinfo.getctime.php
	 * @return int The last change time, in a Unix timestamp.
	 */
	public function getCTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file type
	 * @link http://php.net/manual/en/splfileinfo.gettype.php
	 * @return string A string representing the type of the entry.
	 * May be one of file, link,
	 * or dir
	 */
	public function getType () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the entry is writable
	 * @link http://php.net/manual/en/splfileinfo.iswritable.php
	 * @return bool true if writable, false otherwise;
	 */
	public function isWritable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if file is readable
	 * @link http://php.net/manual/en/splfileinfo.isreadable.php
	 * @return bool true if readable, false otherwise.
	 */
	public function isReadable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is executable
	 * @link http://php.net/manual/en/splfileinfo.isexecutable.php
	 * @return bool true if executable, false otherwise.
	 */
	public function isExecutable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the object references a regular file
	 * @link http://php.net/manual/en/splfileinfo.isfile.php
	 * @return bool true if the file exists and is a regular file (not a link), false otherwise.
	 */
	public function isFile () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a directory
	 * @link http://php.net/manual/en/splfileinfo.isdir.php
	 * @return bool true if a directory, false otherwise.
	 */
	public function isDir () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a link
	 * @link http://php.net/manual/en/splfileinfo.islink.php
	 * @return bool true if the file is a link, false otherwise.
	 */
	public function isLink () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the target of a link
	 * @link http://php.net/manual/en/splfileinfo.getlinktarget.php
	 * @return string the target of the filesystem link.
	 */
	public function getLinkTarget () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets absolute path to file
	 * @link http://php.net/manual/en/splfileinfo.getrealpath.php
	 * @return string the path to the file.
	 */
	public function getRealPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the file
	 * @link http://php.net/manual/en/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use. 
	 * </p>
	 * @return SplFileInfo An SplFileInfo object created for the file.
	 */
	public function getFileInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the path
	 * @link http://php.net/manual/en/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use.
	 * </p>
	 * @return SplFileInfo an SplFileInfo object for the parent path of the file.
	 */
	public function getPathInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileObject object for the file
	 * @link http://php.net/manual/en/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * The mode for opening the file. See the fopen
	 * documentation for descriptions of possible modes. The default 
	 * is read only.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * &parameter.use_include_path;
	 * </p>
	 * @param resource $context [optional] <p>
	 * &parameter.context;
	 * </p>
	 * @return SplFileObject The opened file as an SplFileObject object.
	 */
	public function openFile ($open_mode = null, $use_include_path = null, $context = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class name used with <methodname>SplFileInfo::openFile</methodname>
	 * @link http://php.net/manual/en/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use when openFile() is called. 
	 * </p>
	 * @return void 
	 */
	public function setFileClass ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class used with getFileInfo and getPathInfo
	 * @link http://php.net/manual/en/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use.
	 * </p>
	 * @return void 
	 */
	public function setInfoClass ($class_name = null) {}

}

/**
 * The SplTempFileObject class offers an object oriented interface for a temporary file.
 * @link http://php.net/manual/en/class.spltempfileobject.php
 */
class SplTempFileObject extends SplFileObject implements SeekableIterator, Iterator, Traversable, RecursiveIterator {
	const DROP_NEW_LINE = 1;
	const READ_AHEAD = 2;
	const SKIP_EMPTY = 6;
	const READ_CSV = 8;


	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Construct a new temporary file object
	 * @link http://php.net/manual/en/spltempfileobject.construct.php
	 * @param $max_memory [optional]
	 */
	public function __construct ($max_memory) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the file to the first line
	 * @link http://php.net/manual/en/splfileobject.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Reached end of file
	 * @link http://php.net/manual/en/splfileobject.eof.php
	 * @return boolean true if file is at EOF, false otherwise.
	 */
	public function eof () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Not at EOF
	 * @link http://php.net/manual/en/splfileobject.valid.php
	 * @return bool true if not reached EOF, false otherwise.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets line from file
	 * @link http://php.net/manual/en/splfileobject.fgets.php
	 * @return string a string containing the next line from the file, or false on error.
	 */
	public function fgets () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets line from file and parse as CSV fields
	 * @link http://php.net/manual/en/splfileobject.fgetcsv.php
	 * @param string $delimiter [optional] <p>
	 * The field delimiter (one character only). Defaults as a comma or the value set using SplFileObject::setCsvControl.
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * The field enclosure character (one character only). Defaults as a double quotation mark or the value set using SplFileObject::setCsvControl.
	 * </p>
	 * @param string $escape [optional] <p>
	 * The escape character (one character only). Defaults as a backslash (\) or the value set using SplFileObject::setCsvControl.
	 * </p>
	 * @return array an indexed array containing the fields read, or false on error.
	 * </p>
	 * <p>
	 * A blank line in a CSV file will be returned as an array
	 * comprising a single &null; field unless using SplFileInfo::SKIP_EMPTY | SplFileInfo::DROP_NEW_LINE, 
	 * in which case empty lines are skipped.
	 */
	public function fgetcsv ($delimiter = null, $enclosure = null, $escape = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Set the delimiter and enclosure character for CSV
	 * @link http://php.net/manual/en/splfileobject.setcsvcontrol.php
	 * @param string $delimiter [optional] <p>
	 * The field delimiter (one character only).
	 * </p>
	 * @param string $enclosure [optional] <p>
	 * The field enclosure character (one character only).
	 * </p>
	 * @param string $escape [optional] <p>
	 * The field escape character (one character only).
	 * </p>
	 * @return void 
	 */
	public function setCsvControl ($delimiter = null, $enclosure = null, $escape = null) {}

	/**
	 * (PHP 5 &gt;= 5.2.0)<br/>
	 * Get the delimiter and enclosure character for CSV
	 * @link http://php.net/manual/en/splfileobject.getcsvcontrol.php
	 * @return array an indexed array containing the delimiter and enclosure character.
	 */
	public function getCsvControl () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Portable file locking
	 * @link http://php.net/manual/en/splfileobject.flock.php
	 * @param int $operation <p>
	 * operation is one of the following:
	 * LOCK_SH to acquire a shared lock (reader).
	 * @param int $wouldblock [optional] <p>
	 * Set to true if the lock would block (EWOULDBLOCK errno condition).
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function flock ($operation, &$wouldblock = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Flushes the output to the file
	 * @link http://php.net/manual/en/splfileobject.fflush.php
	 * @return boolean Returns true on success or false on failure.
	 */
	public function fflush () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Return current file position
	 * @link http://php.net/manual/en/splfileobject.ftell.php
	 * @return int the position of the file pointer as an integer, or false on error.
	 */
	public function ftell () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Seek to a position
	 * @link http://php.net/manual/en/splfileobject.fseek.php
	 * @param int $offset <p>
	 * The offset. A negative value can be used to move backwards through the file which
	 * is useful when SEEK_END is used as the whence value.
	 * </p>
	 * @param int $whence [optional] <p>
	 * whence values are:
	 * SEEK_SET - Set position equal to offset bytes.
	 * SEEK_CUR - Set position to current location plus offset.
	 * SEEK_END - Set position to end-of-file plus offset.
	 * </p>
	 * <p>
	 * If whence is not specified, it is assumed to be SEEK_SET.
	 * </p>
	 * @return int 0 if the seek was successful, -1 otherwise. Note that seeking
	 * past EOF is not considered an error.
	 */
	public function fseek ($offset, $whence = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets character from file
	 * @link http://php.net/manual/en/splfileobject.fgetc.php
	 * @return string a string containing a single character read from the file or false on EOF.
	 */
	public function fgetc () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Output all remaining data on a file pointer
	 * @link http://php.net/manual/en/splfileobject.fpassthru.php
	 * @return int the number of characters read from handle
	 * and passed through to the output.
	 */
	public function fpassthru () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets line from file and strip HTML tags
	 * @link http://php.net/manual/en/splfileobject.fgetss.php
	 * @param string $allowable_tags [optional] <p>
	 * You can use the optional third parameter to specify tags which should
	 * not be stripped.
	 * </p>
	 * @return string a string containing the next line of the file with HTML and PHP
	 * code stripped, or false on error.
	 */
	public function fgetss ($allowable_tags = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Parses input from file according to a format
	 * @link http://php.net/manual/en/splfileobject.fscanf.php
	 * @param string $format <p>
	 * The specified format as described in the sprintf documentation.
	 * </p>
	 * @param mixed $_ [optional] 
	 * @return mixed If only two parameters were passed to this method, the values parsed will be
	 * returned as an array. Otherwise, if optional parameters are passed, the
	 * function will return the number of assigned values. The optional
	 * parameters must be passed by reference.
	 */
	public function fscanf ($format, &$_ = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Write to file
	 * @link http://php.net/manual/en/splfileobject.fwrite.php
	 * @param string $str <p>
	 * The string to be written to the file.
	 * </p>
	 * @param int $length [optional] <p>
	 * If the length argument is given, writing will
	 * stop after length bytes have been written or
	 * the end of string is reached, whichever comes
	 * first.
	 * </p>
	 * @return int the number of bytes written, or &null; on error.
	 */
	public function fwrite ($str, $length = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets information about the file
	 * @link http://php.net/manual/en/splfileobject.fstat.php
	 * @return array an array with the statistics of the file; the format of the array
	 * is described in detail on the stat manual page.
	 */
	public function fstat () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Truncates the file to a given length
	 * @link http://php.net/manual/en/splfileobject.ftruncate.php
	 * @param int $size <p>
	 * The size to truncate to.
	 * </p>
	 * <p>
	 * If size is larger than the file it is extended with null bytes.
	 * </p>
	 * <p>
	 * If size is smaller than the file, the extra data will be lost.
	 * </p>
	 * @return bool Returns true on success or false on failure.
	 */
	public function ftruncate ($size) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Retrieve current line of file
	 * @link http://php.net/manual/en/splfileobject.current.php
	 * @return string|array Retrieves the current line of the file. If the SplFileObject::READ_CSV flag is set, this method returns an array containing the current line parsed as CSV data.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get line number
	 * @link http://php.net/manual/en/splfileobject.key.php
	 * @return int the current line number.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Read next line
	 * @link http://php.net/manual/en/splfileobject.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Sets flags for the SplFileObject
	 * @link http://php.net/manual/en/splfileobject.setflags.php
	 * @param int $flags <p>
	 * Bit mask of the flags to set. See 
	 * SplFileObject constants 
	 * for the available flags.
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Gets flags for the SplFileObject
	 * @link http://php.net/manual/en/splfileobject.getflags.php
	 * @return int an integer representing the flags.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Set maximum line length
	 * @link http://php.net/manual/en/splfileobject.setmaxlinelen.php
	 * @param int $max_len <p>
	 * The maximum length of a line.
	 * </p>
	 * @return void 
	 */
	public function setMaxLineLen ($max_len) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Get maximum line length
	 * @link http://php.net/manual/en/splfileobject.getmaxlinelen.php
	 * @return int the maximum line length if one has been set with
	 * SplFileObject::setMaxLineLen, default is 0.
	 */
	public function getMaxLineLen () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * SplFileObject does not have children
	 * @link http://php.net/manual/en/splfileobject.haschildren.php
	 * @return bool false
	 */
	public function hasChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * No purpose
	 * @link http://php.net/manual/en/splfileobject.getchildren.php
	 * @return void 
	 */
	public function getChildren () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Seek to specified line
	 * @link http://php.net/manual/en/splfileobject.seek.php
	 * @param int $line_pos <p>
	 * The zero-based line number to seek to.
	 * </p>
	 * @return void 
	 */
	public function seek ($line_pos) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Alias of <methodname>SplFileObject::fgets</methodname>
	 * @link http://php.net/manual/en/splfileobject.getcurrentline.php
	 */
	public function getCurrentLine () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Alias of <methodname>SplFileObject::current</methodname>
	 * @link http://php.net/manual/en/splfileobject.tostring.php
	 */
	public function __toString () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path without filename
	 * @link http://php.net/manual/en/splfileinfo.getpath.php
	 * @return string the path to the file.
	 */
	public function getPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the filename
	 * @link http://php.net/manual/en/splfileinfo.getfilename.php
	 * @return string The filename.
	 */
	public function getFilename () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the base name of the file
	 * @link http://php.net/manual/en/splfileinfo.getbasename.php
	 * @param string $suffix [optional] <p>
	 * Optional suffix to omit from the base name returned.
	 * </p>
	 * @return string the base name without path information.
	 */
	public function getBasename ($suffix = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the path to the file
	 * @link http://php.net/manual/en/splfileinfo.getpathname.php
	 * @return string The path to the file.
	 */
	public function getPathname () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file permissions
	 * @link http://php.net/manual/en/splfileinfo.getperms.php
	 * @return int the file permissions.
	 */
	public function getPerms () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode for the file
	 * @link http://php.net/manual/en/splfileinfo.getinode.php
	 * @return int the inode number for the filesystem object.
	 */
	public function getInode () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file size
	 * @link http://php.net/manual/en/splfileinfo.getsize.php
	 * @return int The filesize in bytes.
	 */
	public function getSize () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the owner of the file
	 * @link http://php.net/manual/en/splfileinfo.getowner.php
	 * @return int The owner id in numerical format.
	 */
	public function getOwner () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the file group
	 * @link http://php.net/manual/en/splfileinfo.getgroup.php
	 * @return int The group id in numerical format.
	 */
	public function getGroup () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets last access time of the file
	 * @link http://php.net/manual/en/splfileinfo.getatime.php
	 * @return int the time the file was last accessed.
	 */
	public function getATime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the last modified time
	 * @link http://php.net/manual/en/splfileinfo.getmtime.php
	 * @return int the last modified time for the file, in a Unix timestamp.
	 */
	public function getMTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets the inode change time
	 * @link http://php.net/manual/en/splfileinfo.getctime.php
	 * @return int The last change time, in a Unix timestamp.
	 */
	public function getCTime () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets file type
	 * @link http://php.net/manual/en/splfileinfo.gettype.php
	 * @return string A string representing the type of the entry.
	 * May be one of file, link,
	 * or dir
	 */
	public function getType () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the entry is writable
	 * @link http://php.net/manual/en/splfileinfo.iswritable.php
	 * @return bool true if writable, false otherwise;
	 */
	public function isWritable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if file is readable
	 * @link http://php.net/manual/en/splfileinfo.isreadable.php
	 * @return bool true if readable, false otherwise.
	 */
	public function isReadable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is executable
	 * @link http://php.net/manual/en/splfileinfo.isexecutable.php
	 * @return bool true if executable, false otherwise.
	 */
	public function isExecutable () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the object references a regular file
	 * @link http://php.net/manual/en/splfileinfo.isfile.php
	 * @return bool true if the file exists and is a regular file (not a link), false otherwise.
	 */
	public function isFile () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a directory
	 * @link http://php.net/manual/en/splfileinfo.isdir.php
	 * @return bool true if a directory, false otherwise.
	 */
	public function isDir () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Tells if the file is a link
	 * @link http://php.net/manual/en/splfileinfo.islink.php
	 * @return bool true if the file is a link, false otherwise.
	 */
	public function isLink () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets the target of a link
	 * @link http://php.net/manual/en/splfileinfo.getlinktarget.php
	 * @return string the target of the filesystem link.
	 */
	public function getLinkTarget () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Gets absolute path to file
	 * @link http://php.net/manual/en/splfileinfo.getrealpath.php
	 * @return string the path to the file.
	 */
	public function getRealPath () {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the file
	 * @link http://php.net/manual/en/splfileinfo.getfileinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use. 
	 * </p>
	 * @return SplFileInfo An SplFileInfo object created for the file.
	 */
	public function getFileInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileInfo object for the path
	 * @link http://php.net/manual/en/splfileinfo.getpathinfo.php
	 * @param string $class_name [optional] <p>
	 * Name of an SplFileInfo derived class to use.
	 * </p>
	 * @return SplFileInfo an SplFileInfo object for the parent path of the file.
	 */
	public function getPathInfo ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Gets an SplFileObject object for the file
	 * @link http://php.net/manual/en/splfileinfo.openfile.php
	 * @param string $open_mode [optional] <p>
	 * The mode for opening the file. See the fopen
	 * documentation for descriptions of possible modes. The default 
	 * is read only.
	 * </p>
	 * @param bool $use_include_path [optional] <p>
	 * &parameter.use_include_path;
	 * </p>
	 * @param resource $context [optional] <p>
	 * &parameter.context;
	 * </p>
	 * @return SplFileObject The opened file as an SplFileObject object.
	 */
	public function openFile ($open_mode = null, $use_include_path = null, $context = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class name used with <methodname>SplFileInfo::openFile</methodname>
	 * @link http://php.net/manual/en/splfileinfo.setfileclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use when openFile() is called. 
	 * </p>
	 * @return void 
	 */
	public function setFileClass ($class_name = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.2)<br/>
	 * Sets the class used with getFileInfo and getPathInfo
	 * @link http://php.net/manual/en/splfileinfo.setinfoclass.php
	 * @param string $class_name [optional] <p>
	 * The class name to use.
	 * </p>
	 * @return void 
	 */
	public function setInfoClass ($class_name = null) {}

}

/**
 * The SplDoublyLinkedList class provides the main functionalities of a doubly linked list.
 * @link http://php.net/manual/en/class.spldoublylinkedlist.php
 */
class SplDoublyLinkedList implements Iterator, Traversable, Countable, ArrayAccess {
	const IT_MODE_LIFO = 2;
	const IT_MODE_FIFO = 0;
	const IT_MODE_DELETE = 1;
	const IT_MODE_KEEP = 0;


	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Pops a node from the end of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.pop.php
	 * @return mixed The value of the popped node.
	 */
	public function pop () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Shifts a node from the beginning of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.shift.php
	 * @return mixed The value of the shifted node.
	 */
	public function shift () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Pushes an element at the end of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.push.php
	 * @param mixed $value <p>
	 * The value to push.
	 * </p>
	 * @return void 
	 */
	public function push ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Prepends the doubly linked list with an element
	 * @link http://php.net/manual/en/spldoublylinkedlist.unshift.php
	 * @param mixed $value <p>
	 * The value to unshift.
	 * </p>
	 * @return void 
	 */
	public function unshift ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peeks at the node from the end of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.top.php
	 * @return mixed The value of the last node.
	 */
	public function top () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peeks at the node from the beginning of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.bottom.php
	 * @return mixed The value of the first node.
	 */
	public function bottom () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Counts the number of elements in the doubly linked list.
	 * @link http://php.net/manual/en/spldoublylinkedlist.count.php
	 * @return int the number of elements in the doubly linked list.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks whether the doubly linked list is empty.
	 * @link http://php.net/manual/en/spldoublylinkedlist.isempty.php
	 * @return bool whether the doubly linked list is empty.
	 */
	public function isEmpty () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets the mode of iteration
	 * @link http://php.net/manual/en/spldoublylinkedlist.setiteratormode.php
	 * @param int $mode <p>
	 * There are two orthogonal sets of modes that can be set:
	 * </p>
	 * The direction of the iteration (either one or the other):
	 * SplDoublyLinkedList::IT_MODE_LIFO (Stack style)
	 * @return void 
	 */
	public function setIteratorMode ($mode) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the mode of iteration
	 * @link http://php.net/manual/en/spldoublylinkedlist.getiteratormode.php
	 * @return int the different modes and flags that affect the iteration.
	 */
	public function getIteratorMode () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns whether the requested $index exists
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetexists.php
	 * @param mixed $index <p>
	 * The index being checked.
	 * </p>
	 * @return bool true if the requested index exists, otherwise false
	 */
	public function offsetExists ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the value at the specified $index
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetget.php
	 * @param mixed $index <p>
	 * The index with the value.
	 * </p>
	 * @return mixed The value at the specified index.
	 */
	public function offsetGet ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets the value at the specified $index to $newval
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetset.php
	 * @param mixed $index <p>
	 * The index being set.
	 * </p>
	 * @param mixed $newval <p>
	 * The new value for the index.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Unsets the value at the specified $index
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetunset.php
	 * @param mixed $index <p>
	 * The index being unset.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewind iterator back to the start
	 * @link http://php.net/manual/en/spldoublylinkedlist.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current array entry
	 * @link http://php.net/manual/en/spldoublylinkedlist.current.php
	 * @return mixed The current node value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node index
	 * @link http://php.net/manual/en/spldoublylinkedlist.key.php
	 * @return mixed The current node index.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to next entry
	 * @link http://php.net/manual/en/spldoublylinkedlist.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to previous entry
	 * @link http://php.net/manual/en/spldoublylinkedlist.prev.php
	 * @return void 
	 */
	public function prev () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Check whether the doubly linked list contains more nodes
	 * @link http://php.net/manual/en/spldoublylinkedlist.valid.php
	 * @return bool true if the doubly linked list contains any more nodes, false otherwise.
	 */
	public function valid () {}

}

/**
 * The SplQueue class provides the main functionalities of a queue implemented using a doubly linked list.
 * @link http://php.net/manual/en/class.splqueue.php
 */
class SplQueue extends SplDoublyLinkedList implements ArrayAccess, Countable, Traversable, Iterator {
	const IT_MODE_LIFO = 2;
	const IT_MODE_FIFO = 0;
	const IT_MODE_DELETE = 1;
	const IT_MODE_KEEP = 0;


	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Adds an element to the queue.
	 * @link http://php.net/manual/en/splqueue.enqueue.php
	 * @param mixed $value <p>
	 * The value to enqueue.
	 * </p>
	 * @return void 
	 */
	public function enqueue ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Dequeues a node from the queue
	 * @link http://php.net/manual/en/splqueue.dequeue.php
	 * @return mixed The value of the dequeued node.
	 */
	public function dequeue () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Pops a node from the end of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.pop.php
	 * @return mixed The value of the popped node.
	 */
	public function pop () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Shifts a node from the beginning of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.shift.php
	 * @return mixed The value of the shifted node.
	 */
	public function shift () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Pushes an element at the end of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.push.php
	 * @param mixed $value <p>
	 * The value to push.
	 * </p>
	 * @return void 
	 */
	public function push ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Prepends the doubly linked list with an element
	 * @link http://php.net/manual/en/spldoublylinkedlist.unshift.php
	 * @param mixed $value <p>
	 * The value to unshift.
	 * </p>
	 * @return void 
	 */
	public function unshift ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peeks at the node from the end of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.top.php
	 * @return mixed The value of the last node.
	 */
	public function top () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peeks at the node from the beginning of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.bottom.php
	 * @return mixed The value of the first node.
	 */
	public function bottom () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Counts the number of elements in the doubly linked list.
	 * @link http://php.net/manual/en/spldoublylinkedlist.count.php
	 * @return int the number of elements in the doubly linked list.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks whether the doubly linked list is empty.
	 * @link http://php.net/manual/en/spldoublylinkedlist.isempty.php
	 * @return bool whether the doubly linked list is empty.
	 */
	public function isEmpty () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets the mode of iteration
	 * @link http://php.net/manual/en/spldoublylinkedlist.setiteratormode.php
	 * @param int $mode <p>
	 * There are two orthogonal sets of modes that can be set:
	 * </p>
	 * The direction of the iteration (either one or the other):
	 * SplDoublyLinkedList::IT_MODE_LIFO (Stack style)
	 * @return void 
	 */
	public function setIteratorMode ($mode) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the mode of iteration
	 * @link http://php.net/manual/en/spldoublylinkedlist.getiteratormode.php
	 * @return int the different modes and flags that affect the iteration.
	 */
	public function getIteratorMode () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns whether the requested $index exists
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetexists.php
	 * @param mixed $index <p>
	 * The index being checked.
	 * </p>
	 * @return bool true if the requested index exists, otherwise false
	 */
	public function offsetExists ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the value at the specified $index
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetget.php
	 * @param mixed $index <p>
	 * The index with the value.
	 * </p>
	 * @return mixed The value at the specified index.
	 */
	public function offsetGet ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets the value at the specified $index to $newval
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetset.php
	 * @param mixed $index <p>
	 * The index being set.
	 * </p>
	 * @param mixed $newval <p>
	 * The new value for the index.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Unsets the value at the specified $index
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetunset.php
	 * @param mixed $index <p>
	 * The index being unset.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewind iterator back to the start
	 * @link http://php.net/manual/en/spldoublylinkedlist.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current array entry
	 * @link http://php.net/manual/en/spldoublylinkedlist.current.php
	 * @return mixed The current node value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node index
	 * @link http://php.net/manual/en/spldoublylinkedlist.key.php
	 * @return mixed The current node index.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to next entry
	 * @link http://php.net/manual/en/spldoublylinkedlist.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to previous entry
	 * @link http://php.net/manual/en/spldoublylinkedlist.prev.php
	 * @return void 
	 */
	public function prev () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Check whether the doubly linked list contains more nodes
	 * @link http://php.net/manual/en/spldoublylinkedlist.valid.php
	 * @return bool true if the doubly linked list contains any more nodes, false otherwise.
	 */
	public function valid () {}

}

/**
 * The SplStack class provides the main functionalities of a stack implemented using a doubly linked list.
 * @link http://php.net/manual/en/class.splstack.php
 */
class SplStack extends SplDoublyLinkedList implements ArrayAccess, Countable, Traversable, Iterator {
	const IT_MODE_LIFO = 2;
	const IT_MODE_FIFO = 0;
	const IT_MODE_DELETE = 1;
	const IT_MODE_KEEP = 0;


	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Pops a node from the end of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.pop.php
	 * @return mixed The value of the popped node.
	 */
	public function pop () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Shifts a node from the beginning of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.shift.php
	 * @return mixed The value of the shifted node.
	 */
	public function shift () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Pushes an element at the end of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.push.php
	 * @param mixed $value <p>
	 * The value to push.
	 * </p>
	 * @return void 
	 */
	public function push ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Prepends the doubly linked list with an element
	 * @link http://php.net/manual/en/spldoublylinkedlist.unshift.php
	 * @param mixed $value <p>
	 * The value to unshift.
	 * </p>
	 * @return void 
	 */
	public function unshift ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peeks at the node from the end of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.top.php
	 * @return mixed The value of the last node.
	 */
	public function top () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peeks at the node from the beginning of the doubly linked list
	 * @link http://php.net/manual/en/spldoublylinkedlist.bottom.php
	 * @return mixed The value of the first node.
	 */
	public function bottom () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Counts the number of elements in the doubly linked list.
	 * @link http://php.net/manual/en/spldoublylinkedlist.count.php
	 * @return int the number of elements in the doubly linked list.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks whether the doubly linked list is empty.
	 * @link http://php.net/manual/en/spldoublylinkedlist.isempty.php
	 * @return bool whether the doubly linked list is empty.
	 */
	public function isEmpty () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets the mode of iteration
	 * @link http://php.net/manual/en/spldoublylinkedlist.setiteratormode.php
	 * @param int $mode <p>
	 * There are two orthogonal sets of modes that can be set:
	 * </p>
	 * The direction of the iteration (either one or the other):
	 * SplDoublyLinkedList::IT_MODE_LIFO (Stack style)
	 * @return void 
	 */
	public function setIteratorMode ($mode) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the mode of iteration
	 * @link http://php.net/manual/en/spldoublylinkedlist.getiteratormode.php
	 * @return int the different modes and flags that affect the iteration.
	 */
	public function getIteratorMode () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns whether the requested $index exists
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetexists.php
	 * @param mixed $index <p>
	 * The index being checked.
	 * </p>
	 * @return bool true if the requested index exists, otherwise false
	 */
	public function offsetExists ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the value at the specified $index
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetget.php
	 * @param mixed $index <p>
	 * The index with the value.
	 * </p>
	 * @return mixed The value at the specified index.
	 */
	public function offsetGet ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets the value at the specified $index to $newval
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetset.php
	 * @param mixed $index <p>
	 * The index being set.
	 * </p>
	 * @param mixed $newval <p>
	 * The new value for the index.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Unsets the value at the specified $index
	 * @link http://php.net/manual/en/spldoublylinkedlist.offsetunset.php
	 * @param mixed $index <p>
	 * The index being unset.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewind iterator back to the start
	 * @link http://php.net/manual/en/spldoublylinkedlist.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current array entry
	 * @link http://php.net/manual/en/spldoublylinkedlist.current.php
	 * @return mixed The current node value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node index
	 * @link http://php.net/manual/en/spldoublylinkedlist.key.php
	 * @return mixed The current node index.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to next entry
	 * @link http://php.net/manual/en/spldoublylinkedlist.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to previous entry
	 * @link http://php.net/manual/en/spldoublylinkedlist.prev.php
	 * @return void 
	 */
	public function prev () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Check whether the doubly linked list contains more nodes
	 * @link http://php.net/manual/en/spldoublylinkedlist.valid.php
	 * @return bool true if the doubly linked list contains any more nodes, false otherwise.
	 */
	public function valid () {}

}

/**
 * The SplHeap class provides the main functionalities of an Heap.
 * @link http://php.net/manual/en/class.splheap.php
 */
class SplHeap implements Iterator, Traversable, Countable {

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Extracts a node from top of the heap and sift up.
	 * @link http://php.net/manual/en/splheap.extract.php
	 * @return mixed The value of the extracted node.
	 */
	public function extract () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Inserts an element in the heap by sifting it up.
	 * @link http://php.net/manual/en/splheap.insert.php
	 * @param mixed $value <p>
	 * The value to insert.
	 * </p>
	 * @return void 
	 */
	public function insert ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peaks at the node from the top of the heap
	 * @link http://php.net/manual/en/splheap.top.php
	 * @return mixed The value of the node on the top.
	 */
	public function top () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Counts the number of elements in the heap.
	 * @link http://php.net/manual/en/splheap.count.php
	 * @return int the number of elements in the heap.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks whether the heap is empty.
	 * @link http://php.net/manual/en/splheap.isempty.php
	 * @return bool whether the heap is empty.
	 */
	public function isEmpty () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewind iterator back to the start (no-op)
	 * @link http://php.net/manual/en/splheap.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node pointed by the iterator
	 * @link http://php.net/manual/en/splheap.current.php
	 * @return mixed The current node value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node index
	 * @link http://php.net/manual/en/splheap.key.php
	 * @return mixed The current node index.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to the next node
	 * @link http://php.net/manual/en/splheap.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Check whether the heap contains more nodes
	 * @link http://php.net/manual/en/splheap.valid.php
	 * @return bool true if the heap contains any more nodes, false otherwise.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Recover from the corrupted state and allow further actions on the heap.
	 * @link http://php.net/manual/en/splheap.recoverfromcorruption.php
	 * @return void 
	 */
	public function recoverFromCorruption () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Compare elements in order to place them correctly in the heap while sifting up.
	 * @link http://php.net/manual/en/splheap.compare.php
	 * @param mixed $value1 <p>
	 * The value of the first node being compared.
	 * </p>
	 * @param mixed $value2 <p>
	 * The value of the second node being compared.
	 * </p>
	 * @return int Result of the comparison, positive integer if value1 is greater than value2, 0 if they are equal, negative integer otherwise.
	 * </p>
	 * <p>
	 * Having multiple elements with the same value in a Heap is not recommended. They will end up in an arbitrary relative position.
	 */
	abstract protected function compare ($value1, $value2) {}

}

/**
 * The SplMinHeap class provides the main functionalities of a heap, keeping the minimum on the top.
 * @link http://php.net/manual/en/class.splminheap.php
 */
class SplMinHeap extends SplHeap implements Countable, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Compare elements in order to place them correctly in the heap while sifting up.
	 * @link http://php.net/manual/en/splminheap.compare.php
	 * @param mixed $value1 <p>
	 * The value of the first node being compared.
	 * </p>
	 * @param mixed $value2 <p>
	 * The value of the second node being compared.
	 * </p>
	 * @return void Result of the comparison, positive integer if value1 is lower than value2, 0 if they are equal, negative integer otherwise.
	 * </p>
	 * <p>
	 * Having multiple elements with the same value in a Heap is not recommended. They will end up in an arbitrary relative position.
	 */
	protected function compare ($value1, $value2) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Extracts a node from top of the heap and sift up.
	 * @link http://php.net/manual/en/splheap.extract.php
	 * @return mixed The value of the extracted node.
	 */
	public function extract () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Inserts an element in the heap by sifting it up.
	 * @link http://php.net/manual/en/splheap.insert.php
	 * @param mixed $value <p>
	 * The value to insert.
	 * </p>
	 * @return void 
	 */
	public function insert ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peaks at the node from the top of the heap
	 * @link http://php.net/manual/en/splheap.top.php
	 * @return mixed The value of the node on the top.
	 */
	public function top () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Counts the number of elements in the heap.
	 * @link http://php.net/manual/en/splheap.count.php
	 * @return int the number of elements in the heap.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks whether the heap is empty.
	 * @link http://php.net/manual/en/splheap.isempty.php
	 * @return bool whether the heap is empty.
	 */
	public function isEmpty () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewind iterator back to the start (no-op)
	 * @link http://php.net/manual/en/splheap.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node pointed by the iterator
	 * @link http://php.net/manual/en/splheap.current.php
	 * @return mixed The current node value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node index
	 * @link http://php.net/manual/en/splheap.key.php
	 * @return mixed The current node index.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to the next node
	 * @link http://php.net/manual/en/splheap.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Check whether the heap contains more nodes
	 * @link http://php.net/manual/en/splheap.valid.php
	 * @return bool true if the heap contains any more nodes, false otherwise.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Recover from the corrupted state and allow further actions on the heap.
	 * @link http://php.net/manual/en/splheap.recoverfromcorruption.php
	 * @return void 
	 */
	public function recoverFromCorruption () {}

}

/**
 * The SplMaxHeap class provides the main functionalities of a heap, keeping the maximum on the top.
 * @link http://php.net/manual/en/class.splmaxheap.php
 */
class SplMaxHeap extends SplHeap implements Countable, Traversable, Iterator {

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Compare elements in order to place them correctly in the heap while sifting up.
	 * @link http://php.net/manual/en/splmaxheap.compare.php
	 * @param mixed $value1 <p>
	 * The value of the first node being compared.
	 * </p>
	 * @param mixed $value2 <p>
	 * The value of the second node being compared.
	 * </p>
	 * @return void Result of the comparison, positive integer if value1 is greater than value2, 0 if they are equal, negative integer otherwise.
	 * </p>
	 * <p>
	 * Having multiple elements with the same value in a Heap is not recommended. They will end up in an arbitrary relative position.
	 */
	protected function compare ($value1, $value2) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Extracts a node from top of the heap and sift up.
	 * @link http://php.net/manual/en/splheap.extract.php
	 * @return mixed The value of the extracted node.
	 */
	public function extract () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Inserts an element in the heap by sifting it up.
	 * @link http://php.net/manual/en/splheap.insert.php
	 * @param mixed $value <p>
	 * The value to insert.
	 * </p>
	 * @return void 
	 */
	public function insert ($value) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peaks at the node from the top of the heap
	 * @link http://php.net/manual/en/splheap.top.php
	 * @return mixed The value of the node on the top.
	 */
	public function top () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Counts the number of elements in the heap.
	 * @link http://php.net/manual/en/splheap.count.php
	 * @return int the number of elements in the heap.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks whether the heap is empty.
	 * @link http://php.net/manual/en/splheap.isempty.php
	 * @return bool whether the heap is empty.
	 */
	public function isEmpty () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewind iterator back to the start (no-op)
	 * @link http://php.net/manual/en/splheap.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node pointed by the iterator
	 * @link http://php.net/manual/en/splheap.current.php
	 * @return mixed The current node value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node index
	 * @link http://php.net/manual/en/splheap.key.php
	 * @return mixed The current node index.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to the next node
	 * @link http://php.net/manual/en/splheap.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Check whether the heap contains more nodes
	 * @link http://php.net/manual/en/splheap.valid.php
	 * @return bool true if the heap contains any more nodes, false otherwise.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Recover from the corrupted state and allow further actions on the heap.
	 * @link http://php.net/manual/en/splheap.recoverfromcorruption.php
	 * @return void 
	 */
	public function recoverFromCorruption () {}

}

/**
 * The SplPriorityQueue class provides the main functionalities of an 
 * prioritized queue, implemented using a heap.
 * @link http://php.net/manual/en/class.splpriorityqueue.php
 */
class SplPriorityQueue implements Iterator, Traversable, Countable {
	const EXTR_BOTH = 3;
	const EXTR_PRIORITY = 2;
	const EXTR_DATA = 1;


	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Compare priorities in order to place elements correctly in the heap while sifting up.
	 * @link http://php.net/manual/en/splpriorityqueue.compare.php
	 * @param mixed $priority1 <p>
	 * The priority of the first node being compared.
	 * </p>
	 * @param mixed $priority2 <p>
	 * The priority of the second node being compared.
	 * </p>
	 * @return void Result of the comparison, positive integer if priority1 is greater than priority2, 0 if they are equal, negative integer otherwise.
	 * </p>
	 * <p>
	 * Multiple elements with the same priority will get dequeued in no particular order.
	 */
	public function compare ($priority1, $priority2) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Inserts an element in the queue by sifting it up.
	 * @link http://php.net/manual/en/splpriorityqueue.insert.php
	 * @param mixed $value <p>
	 * The value to insert.
	 * </p>
	 * @param mixed $priority <p>
	 * The associated priority.
	 * </p>
	 * @return void 
	 */
	public function insert ($value, $priority) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets the mode of extraction
	 * @link http://php.net/manual/en/splpriorityqueue.setextractflags.php
	 * @param int $flags <p>
	 * Defines what is extracted by SplPriorityQueue::current,
	 * SplPriorityQueue::top and 
	 * SplPriorityQueue::extract.
	 * </p>
	 * SplPriorityQueue::EXTR_DATA (0x00000001): Extract the data
	 * @return void 
	 */
	public function setExtractFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Peaks at the node from the top of the queue
	 * @link http://php.net/manual/en/splpriorityqueue.top.php
	 * @return mixed The value or priority (or both) of the top node, depending on the extract flag.
	 */
	public function top () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Extracts a node from top of the heap and sift up.
	 * @link http://php.net/manual/en/splpriorityqueue.extract.php
	 * @return mixed The value or priority (or both) of the extracted node, depending on the extract flag.
	 */
	public function extract () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Counts the number of elements in the queue.
	 * @link http://php.net/manual/en/splpriorityqueue.count.php
	 * @return int the number of elements in the queue.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks whether the queue is empty.
	 * @link http://php.net/manual/en/splpriorityqueue.isempty.php
	 * @return bool whether the queue is empty.
	 */
	public function isEmpty () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewind iterator back to the start (no-op)
	 * @link http://php.net/manual/en/splpriorityqueue.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node pointed by the iterator
	 * @link http://php.net/manual/en/splpriorityqueue.current.php
	 * @return mixed The value or priority (or both) of the current node, depending on the extract flag.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current node index
	 * @link http://php.net/manual/en/splpriorityqueue.key.php
	 * @return mixed The current node index.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to the next node
	 * @link http://php.net/manual/en/splpriorityqueue.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Check whether the queue contains more nodes
	 * @link http://php.net/manual/en/splpriorityqueue.valid.php
	 * @return bool true if the queue contains any more nodes, false otherwise.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Recover from the corrupted state and allow further actions on the queue.
	 * @link http://php.net/manual/en/splpriorityqueue.recoverfromcorruption.php
	 * @return void 
	 */
	public function recoverFromCorruption () {}

}

/**
 * The SplFixedArray class provides the main functionalities of array. The 
 * main differences between a SplFixedArray and a normal PHP array is that 
 * the SplFixedArray is of fixed length and allows only integers within 
 * the range as indexes. The advantage is that it allows a faster array
 * implementation.
 * @link http://php.net/manual/en/class.splfixedarray.php
 */
class SplFixedArray implements Iterator, Traversable, ArrayAccess, Countable {

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Constructs a new fixed array
	 * @link http://php.net/manual/en/splfixedarray.construct.php
	 * @param $size [optional]
	 */
	public function __construct ($size) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the size of the array
	 * @link http://php.net/manual/en/splfixedarray.count.php
	 * @return int the size of the array.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns a PHP array from the fixed array
	 * @link http://php.net/manual/en/splfixedarray.toarray.php
	 * @return array a PHP array, similar to the fixed array.
	 */
	public function toArray () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Import a PHP array in a <classname>SplFixedArray</classname> instance
	 * @link http://php.net/manual/en/splfixedarray.fromarray.php
	 * @param array $array <p>
	 * The array to import.
	 * </p>
	 * @param boolean $save_indexes [optional] <p>
	 * Try to save the numeric indexes used in the original array. 
	 * </p>
	 * @return SplFixedArray an instance of SplFixedArray 
	 * containing the array content.
	 */
	public static function fromArray ($arrayarray , $save_indexes = null) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets the size of the array
	 * @link http://php.net/manual/en/splfixedarray.getsize.php
	 * @return int the size of the array, as an integer.
	 */
	public function getSize () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Change the size of an array
	 * @link http://php.net/manual/en/splfixedarray.setsize.php
	 * @param int $size <p>
	 * The new array size.
	 * </p>
	 * @return int 
	 */
	public function setSize ($size) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns whether the requested index exists
	 * @link http://php.net/manual/en/splfixedarray.offsetexists.php
	 * @param int $index <p>
	 * The index being checked.
	 * </p>
	 * @return bool true if the requested index exists, otherwise false
	 */
	public function offsetExists ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the value at the specified index
	 * @link http://php.net/manual/en/splfixedarray.offsetget.php
	 * @param int $index <p>
	 * The index with the value.
	 * </p>
	 * @return mixed The value at the specified index.
	 */
	public function offsetGet ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets a new value at a specified index
	 * @link http://php.net/manual/en/splfixedarray.offsetset.php
	 * @param int $index <p>
	 * The index being set.
	 * </p>
	 * @param mixed $newval <p>
	 * The new value for the index.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($index, $newval) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Unsets the value at the specified $index
	 * @link http://php.net/manual/en/splfixedarray.offsetunset.php
	 * @param int $index <p>
	 * The index being unset.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($index) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewind iterator back to the start
	 * @link http://php.net/manual/en/splfixedarray.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current array entry
	 * @link http://php.net/manual/en/splfixedarray.current.php
	 * @return mixed The current element value.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Return current array index
	 * @link http://php.net/manual/en/splfixedarray.key.php
	 * @return int The current array index.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Move to next entry
	 * @link http://php.net/manual/en/splfixedarray.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Check whether the array contains more elements
	 * @link http://php.net/manual/en/splfixedarray.valid.php
	 * @return bool true if the array contains any more elements, false otherwise.
	 */
	public function valid () {}

}

/**
 * The abstract SplObserver class is used alongside
 * SplSubject to implement the Observer Design Pattern.
 * @link http://php.net/manual/en/class.splobserver.php
 */
interface SplObserver  {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Receive update from subject
	 * @link http://php.net/manual/en/splobserver.update.php
	 * @param SplSubject $subject <p>
	 * The SplSubject notifying the observer of an update.
	 * </p>
	 * @return void 
	 */
	abstract public function update ($subject) {}

}

/**
 * The abstract SplSubject class is used alongside
 * SplObserver to implement the Observer Design Pattern.
 * @link http://php.net/manual/en/class.splsubject.php
 */
interface SplSubject  {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Attach an SplObserver
	 * @link http://php.net/manual/en/splsubject.attach.php
	 * @param SplObserver $observer <p>
	 * The SplObserver to attach.
	 * </p>
	 * @return void 
	 */
	abstract public function attach ($observer) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Detach an observer
	 * @link http://php.net/manual/en/splsubject.detach.php
	 * @param SplObserver $observer <p>
	 * The SplObserver to detach.
	 * </p>
	 * @return void 
	 */
	abstract public function detach ($observer) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Notify an observer
	 * @link http://php.net/manual/en/splsubject.notify.php
	 * @return void 
	 */
	abstract public function notify () {}

}

/**
 * The SplObjectStorage class provides a map from objects to data or, by
 * ignoring data, an object set. This dual purpose can be useful in many
 * cases involving the need to uniquely identify objects.
 * @link http://php.net/manual/en/class.splobjectstorage.php
 */
class SplObjectStorage implements Countable, Iterator, Traversable, Serializable, ArrayAccess {

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Adds an object in the storage
	 * @link http://php.net/manual/en/splobjectstorage.attach.php
	 * @param object $object <p>
	 * The object to add.
	 * </p>
	 * @param mixed $data [optional] <p>
	 * The data to associate with the object.
	 * </p>
	 * @return void 
	 */
	public function attach ($object, $data = null) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Removes an <type>object</type> from the storage
	 * @link http://php.net/manual/en/splobjectstorage.detach.php
	 * @param object $object <p>
	 * The object to remove.
	 * </p>
	 * @return void 
	 */
	public function detach ($object) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Checks if the storage contains a specific object
	 * @link http://php.net/manual/en/splobjectstorage.contains.php
	 * @param object $object <p>
	 * The object to look for.
	 * </p>
	 * @return boolean true if the object is in the storage, false otherwise.
	 */
	public function contains ($object) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Adds all objects from another storage
	 * @link http://php.net/manual/en/splobjectstorage.addall.php
	 * @param SplObjectStorage $storage <p>
	 * The storage you want to import.
	 * </p>
	 * @return void 
	 */
	public function addAll ($storageSplObjectStorage ) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Removes objects contained in another storage from the current storage
	 * @link http://php.net/manual/en/splobjectstorage.removeall.php
	 * @param SplObjectStorage $storage <p>
	 * The storage containing the elements to remove.
	 * </p>
	 * @return void 
	 */
	public function removeAll ($storageSplObjectStorage ) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the data associated with the current iterator entry
	 * @link http://php.net/manual/en/splobjectstorage.getinfo.php
	 * @return mixed The data associated with the current iterator position.
	 */
	public function getInfo () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets the data associated with the current iterator entry
	 * @link http://php.net/manual/en/splobjectstorage.setinfo.php
	 * @param mixed $data <p>
	 * The data to associate with the current iterator entry.
	 * </p>
	 * @return void 
	 */
	public function setInfo ($data) {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns the number of objects in the storage
	 * @link http://php.net/manual/en/splobjectstorage.count.php
	 * @return int The number of objects in the storage.
	 */
	public function count () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Rewind the iterator to the first storage element
	 * @link http://php.net/manual/en/splobjectstorage.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns if the current iterator entry is valid
	 * @link http://php.net/manual/en/splobjectstorage.valid.php
	 * @return boolean true if the iterator entry is valid, false otherwise.
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns the index at which the iterator currently is
	 * @link http://php.net/manual/en/splobjectstorage.key.php
	 * @return int The index corresponding to the position of the iterator.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Returns the current storage entry
	 * @link http://php.net/manual/en/splobjectstorage.current.php
	 * @return object The object at the current iterator position.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.1.0)<br/>
	 * Move to the next entry
	 * @link http://php.net/manual/en/splobjectstorage.next.php
	 * @return void 
	 */
	public function next () {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Unserializes a storage from its string representation
	 * @link http://php.net/manual/en/splobjectstorage.unserialize.php
	 * @param string $serialized <p>
	 * The serialized representation of a storage.
	 * </p>
	 * @return void 
	 */
	public function unserialize ($serialized) {}

	/**
	 * (PHP 5 &gt;= 5.2.2)<br/>
	 * Serializes the storage
	 * @link http://php.net/manual/en/splobjectstorage.serialize.php
	 * @return string A string representing the storage.
	 */
	public function serialize () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks whether an object exists in the storage
	 * @link http://php.net/manual/en/splobjectstorage.offsetexists.php
	 * @param object $object <p>
	 * The object to look for.
	 * </p>
	 * @return boolean true if the object exists in the storage,
	 * and false otherwise.
	 */
	public function offsetExists ($object) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Associates data to an object in the storage
	 * @link http://php.net/manual/en/splobjectstorage.offsetset.php
	 * @param object $object <p>
	 * The object to associate data with.
	 * </p>
	 * @param mixed $info <p>
	 * The data to associate with the object.
	 * </p>
	 * @return void 
	 */
	public function offsetSet ($object, $info) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Removes an object from the storage
	 * @link http://php.net/manual/en/splobjectstorage.offsetunset.php
	 * @param object $object <p>
	 * The object to remove.
	 * </p>
	 * @return void 
	 */
	public function offsetUnset ($object) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Returns the data associated with an <type>object</type>
	 * @link http://php.net/manual/en/splobjectstorage.offsetget.php
	 * @param object $object <p>
	 * The object to look for.
	 * </p>
	 * @return mixed The data previously associated with the object in the storage.
	 */
	public function offsetGet ($object) {}

}

/**
 * An Iterator that iterates over several iterators one after the other.
 * @link http://php.net/manual/en/class.multipleiterator.php
 */
class MultipleIterator implements Iterator, Traversable {
	const MIT_NEED_ANY = 0;
	const MIT_NEED_ALL = 1;
	const MIT_KEYS_NUMERIC = 0;
	const MIT_KEYS_ASSOC = 2;


	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Constructs a new MultipleIterator
	 * @link http://php.net/manual/en/multipleiterator.construct.php
	 * @param $flags
	 */
	public function __construct ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets the flag information
	 * @link http://php.net/manual/en/multipleiterator.getflags.php
	 * @return void Information about the flags, as an integer.
	 */
	public function getFlags () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Sets flags
	 * @link http://php.net/manual/en/multipleiterator.setflags.php
	 * @param integer $flags <p>
	 * The flags to set, according to the
	 * Flag Constants
	 * </p>
	 * @return void 
	 */
	public function setFlags ($flags) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Attaches iterator information
	 * @link http://php.net/manual/en/multipleiterator.attachiterator.php
	 * @param Iterator $iterator <p>
	 * The new iterator to attach.
	 * </p>
	 * @param string $infos [optional] <p>
	 * The associative information for the Iterator, which must be an
	 * integer, a string, or &null;. 
	 * </p>
	 * @return void Description...
	 */
	public function attachIterator ($iterator, $infos = null) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Detaches an iterator
	 * @link http://php.net/manual/en/multipleiterator.detachiterator.php
	 * @param Iterator $iterator <p>
	 * The iterator to detach.
	 * </p>
	 * @return void 
	 */
	public function detachIterator ($iterator) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks if an iterator is attached
	 * @link http://php.net/manual/en/multipleiterator.containsiterator.php
	 * @param Iterator $iterator <p>
	 * The iterator to check.
	 * </p>
	 * @return void Returns true on success or false on failure.
	 */
	public function containsIterator ($iterator) {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets the number of attached iterator instances
	 * @link http://php.net/manual/en/multipleiterator.countiterators.php
	 * @return void The number of attached iterator instances (as an integer).
	 */
	public function countIterators () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Rewinds all attached iterator instances
	 * @link http://php.net/manual/en/multipleiterator.rewind.php
	 * @return void 
	 */
	public function rewind () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Checks the validity of sub iterators
	 * @link http://php.net/manual/en/multipleiterator.valid.php
	 * @return void true if one or all sub iterators are valid depending on flags,
	 * otherwise false
	 */
	public function valid () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets the registered iterator instances
	 * @link http://php.net/manual/en/multipleiterator.key.php
	 * @return void An array of all registered iterator instances,
	 * or false if no sub iterator is attached.
	 */
	public function key () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Gets the registered iterator instances
	 * @link http://php.net/manual/en/multipleiterator.current.php
	 * @return void An array of all registered iterator instances,
	 * or false if no sub iterator is attached.
	 */
	public function current () {}

	/**
	 * (PHP 5 &gt;= 5.3.0)<br/>
	 * Moves all attached iterator instances forward
	 * @link http://php.net/manual/en/multipleiterator.next.php
	 * @return void 
	 */
	public function next () {}

}

/**
 * (PHP 5)<br/>
 * Return available SPL classes
 * @link http://php.net/manual/en/function.spl-classes.php
 * @return array 
 */
function spl_classes () {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Default implementation for __autoload()
 * @link http://php.net/manual/en/function.spl-autoload.php
 * @param string $class_name <p>
 * </p>
 * @param string $file_extensions [optional] <p>
 * By default it checks all include paths to
 * contain filenames built up by the lowercase class name appended by the
 * filename extensions .inc and .php. 
 * </p>
 * @return void 
 */
function spl_autoload ($class_name, $file_extensions = null) {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Register and return default file extensions for spl_autoload
 * @link http://php.net/manual/en/function.spl-autoload-extensions.php
 * @param string $file_extensions [optional] <p>
 * When calling without an argument, it simply returns the current list
 * of extensions each separated by comma. To modify the list of file
 * extensions, simply invoke the functions with the new list of file
 * extensions to use in a single string with each extensions separated
 * by comma.
 * </p>
 * @return string A comma delimited list of default file extensions for
 * spl_autoload.
 */
function spl_autoload_extensions ($file_extensions = null) {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Register given function as __autoload() implementation
 * @link http://php.net/manual/en/function.spl-autoload-register.php
 * @param callback $autoload_function [optional] <p>
 * The autoload function being registered.
 * If no parameter is provided, then the default implementation of
 * spl_autoload will be registered. 
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function spl_autoload_register ($autoload_function = null) {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Unregister given function as __autoload() implementation
 * @link http://php.net/manual/en/function.spl-autoload-unregister.php
 * @param mixed $autoload_function <p>
 * The autoload function being unregistered.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function spl_autoload_unregister ($autoload_function) {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Return all registered __autoload() functions
 * @link http://php.net/manual/en/function.spl-autoload-functions.php
 * @return array An array of all registered __autoload functions.
 * If the autoload stack is not activated then the return value is false.
 * If no function is registered the return value will be an empty array.
 */
function spl_autoload_functions () {}

/**
 * (PHP 5 &gt;= 5.1.2)<br/>
 * Try all registered __autoload() function to load the requested class
 * @link http://php.net/manual/en/function.spl-autoload-call.php
 * @param string $class_name <p>
 * The class name being searched.
 * </p>
 * @return void 
 */
function spl_autoload_call ($class_name) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Return the parent classes of the given class
 * @link http://php.net/manual/en/function.class-parents.php
 * @param mixed $class <p>
 * An object (class instance) or a string (class name).
 * </p>
 * @param bool $autoload [optional] <p>
 * Whether to allow this function to load the class automatically through
 * the __autoload magic
 * method.
 * </p>
 * @return array An array on success, or false on error.
 */
function class_parents ($class, $autoload = null) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Return the interfaces which are implemented by the given class
 * @link http://php.net/manual/en/function.class-implements.php
 * @param mixed $class <p>
 * An object (class instance) or a string (class name).
 * </p>
 * @param bool $autoload [optional] <p>
 * Whether to allow this function to load the class automatically through
 * the __autoload magic
 * method.
 * </p>
 * @return array An array on success, or false on error.
 */
function class_implements ($class, $autoload = null) {}

/**
 * (PHP 5 &gt;= 5.2.0)<br/>
 * Return hash id for given object
 * @link http://php.net/manual/en/function.spl-object-hash.php
 * @param object $obj 
 * @return string A string that is unique for each object and is always the same for
 * the same object.
 */
function spl_object_hash ($obj) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Copy the iterator into an array
 * @link http://php.net/manual/en/function.iterator-to-array.php
 * @param Traversable $iterator <p>
 * The iterator being copied.
 * </p>
 * @param bool $use_keys [optional] <p>
 * Whether to use the iterator element keys as index.
 * </p>
 * @return array An array containing the elements of the iterator.
 */
function iterator_to_array ($iterator, $use_keys = null) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Count the elements in an iterator
 * @link http://php.net/manual/en/function.iterator-count.php
 * @param Traversable $iterator <p>
 * The iterator being counted.
 * </p>
 * @return int The number of elements in iterator.
 */
function iterator_count ($iterator) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Call a function for every element in an iterator
 * @link http://php.net/manual/en/function.iterator-apply.php
 * @param Traversable $iterator <p>
 * The class to iterate over.
 * </p>
 * @param callback $function <p>
 * The callback function to call on every element.
 * The function must return true in order to
 * continue iterating over the iterator.
 * </p>
 * @param array $args [optional] <p>
 * Arguments to pass to the callback function.
 * </p>
 * @return int the iteration count.
 */
function iterator_apply ($iterator, $function, $args = nullarray ) {}

// End of SPL v.0.2
?>
