<?php

// Start of libxml v.

/**
 * Contains various information about errors thrown by libxml. The error codes
 * are described within the official 
 * xmlError API documentation.
 * @link http://php.net/manual/en/class.libxmlerror.php
 */
class LibXMLError  {
}

/**
 * (PHP 5)<br/>
 * Set the streams context for the next libxml document load or write
 * @link http://php.net/manual/en/function.libxml-set-streams-context.php
 * @param resource $streams_context <p>
 * The stream context resource (created with
 * stream_context_create)
 * </p>
 * @return void 
 */
function libxml_set_streams_context ($streams_context) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Disable libxml errors and allow user to fetch error information as needed
 * @link http://php.net/manual/en/function.libxml-use-internal-errors.php
 * @param bool $use_errors [optional] <p>
 * Whether to enable user error handling.
 * </p>
 * @return bool This function returns the previous value of
 * use_errors.
 */
function libxml_use_internal_errors ($use_errors = null) {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Retrieve last error from libxml
 * @link http://php.net/manual/en/function.libxml-get-last-error.php
 * @return LibXMLError a LibXMLError object if there is any error in the
 * buffer, false otherwise.
 */
function libxml_get_last_error () {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Clear libxml error buffer
 * @link http://php.net/manual/en/function.libxml-clear-errors.php
 * @return void 
 */
function libxml_clear_errors () {}

/**
 * (PHP 5 &gt;= 5.1.0)<br/>
 * Retrieve array of errors
 * @link http://php.net/manual/en/function.libxml-get-errors.php
 * @return array an array with LibXMLError objects if there are any
 * errors in the buffer, or an empty array otherwise.
 */
function libxml_get_errors () {}

/**
 * (PHP 5 &gt;= 5.2.11)<br/>
 * Disable the ability to load external entities
 * @link http://php.net/manual/en/function.libxml-disable-entity-loader.php
 * @param bool $disable [optional] <p>
 * Disable (true) or enable (false) libxml extensions (such as
 * , 
 * and ) to load external entities.
 * </p>
 * @return ReturnType the previous value.
 */
function libxml_disable_entity_loader ($disable = null) {}


/**
 * libxml version like 20605 or 20617
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_VERSION', 20632);

/**
 * libxml version like 2.6.5 or 2.6.17
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_DOTTED_VERSION', "2.6.32");
define ('LIBXML_LOADED_VERSION', 20705);

/**
 * Substitute entities
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_NOENT', 2);

/**
 * Load the external subset
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_DTDLOAD', 4);

/**
 * Default DTD attributes
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_DTDATTR', 8);

/**
 * Validate with the DTD
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_DTDVALID', 16);

/**
 * Suppress error reports
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_NOERROR', 32);

/**
 * Suppress warning reports
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_NOWARNING', 64);

/**
 * Remove blank nodes
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_NOBLANKS', 256);

/**
 * Implement XInclude substitution
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_XINCLUDE', 1024);

/**
 * Remove redundant namespaces declarations
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_NSCLEAN', 8192);

/**
 * Merge CDATA as text nodes
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_NOCDATA', 16384);

/**
 * Disable network access when loading documents
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_NONET', 2048);

/**
 * Activate small nodes allocation optimization. This may speed up your
 * application without needing to change the code.
 * <p>
 * Only available in Libxml &gt;= 2.6.21
 * </p>
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_COMPACT', 65536);

/**
 * Drop the XML declaration when saving a document
 * <p>
 * Only available in Libxml &gt;= 2.6.21
 * </p>
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_NOXMLDECL', 2);

/**
 * Expand empty tags (e.g. &lt;br/&gt; to
 * &lt;br&gt;&lt;/br&gt;)
 * <p>
 * This option is currently just available in the
 * and
 * functions.
 * </p>
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_NOEMPTYTAG', 4);

/**
 * No errors
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_ERR_NONE', 0);

/**
 * A simple warning
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_ERR_WARNING', 1);

/**
 * A recoverable error
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_ERR_ERROR', 2);

/**
 * A fatal error
 * @link http://php.net/manual/en/libxml.constants.php
 */
define ('LIBXML_ERR_FATAL', 3);

// End of libxml v.
?>
