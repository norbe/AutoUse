<?php

// Start of apc v.3.1.3p1

/**
 * (PECL apc &gt;= 2.0.0)<br/>
 * Retrieves cached information from APC's data store
 * @link http://php.net/manual/en/function.apc-cache-info.php
 * @param string $cache_type [optional] <p>
 * If cache_type is "user",
 * information about the user cache will be returned.
 * </p>
 * <p> 
 * If cache_type is "filehits",
 * information about which files have been served from the bytecode cache 
 * for the current request will be returned. This feature must be enabled at
 * compile time using --enable-filehits.
 * </p>
 * <p>
 * If an invalid or no cache_type is specified, information about 
 * the system cache (cached files) will be returned.
 * </p>
 * @param bool $limited [optional] <p>
 * If limited is true, the
 * return value will exclude the individual list of cache entries. This
 * is useful when trying to optimize calls for statistics gathering.
 * </p>
 * @return array Array of cached data (and meta-data)&return.falseforfailure;
 */
function apc_cache_info ($cache_type = null, $limited = null) {}

/**
 * (PECL apc &gt;= 2.0.0)<br/>
 * Clears the APC cache
 * @link http://php.net/manual/en/function.apc-clear-cache.php
 * @param string $cache_type [optional] <p>
 * If cache_type is "user", the
 * user cache will be cleared; otherwise, the system cache (cached files)
 * will be cleared.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function apc_clear_cache ($cache_type = null) {}

/**
 * (PECL apc &gt;= 2.0.0)<br/>
 * Retrieves APC's Shared Memory Allocation information
 * @link http://php.net/manual/en/function.apc-sma-info.php
 * @param bool $limited [optional] <p>
 * When set to false (default) apc_sma_info will
 * return a detailed information about each segment.
 * </p>
 * @return array Array of Shared Memory Allocation data; false on failure.
 */
function apc_sma_info ($limited = null) {}

/**
 * (PECL apc &gt;= 3.0.0)<br/>
 * Cache a variable in the data store
 * @link http://php.net/manual/en/function.apc-store.php
 * @param string $key <p>
 * Store the variable using this name. keys are
 * cache-unique, so storing a second value with the same
 * key will overwrite the original value.
 * </p>
 * @param mixed $var <p>
 * The variable to store
 * </p>
 * @param int $ttl [optional] <p>
 * Time To Live; store var in the cache for
 * ttl seconds. After the
 * ttl has passed, the stored variable will be
 * expunged from the cache (on the next request). If no ttl
 * is supplied (or if the ttl is
 * 0), the value will persist until it is removed from
 * the cache manually, or otherwise fails to exist in the cache (clear,
 * restart, etc.).
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function apc_store ($key, $var, $ttl = null) {}

/**
 * (PECL apc &gt;= 3.0.0)<br/>
 * Fetch a stored variable from the cache
 * @link http://php.net/manual/en/function.apc-fetch.php
 * @param mixed $key <p>
 * The key used to store the value (with
 * apc_store). If an array is passed then each
 * element is fetched and returned.
 * </p>
 * @param bool $success [optional] <p>
 * Set to true in success and false in failure.
 * </p>
 * @return mixed The stored variable or array of variables on success; false on failure
 */
function apc_fetch ($key, &$success = null) {}

/**
 * (PECL apc &gt;= 3.0.0)<br/>
 * Removes a stored variable from the cache
 * @link http://php.net/manual/en/function.apc-delete.php
 * @param string $key <p>
 * The key used to store the value (with
 * apc_store).
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function apc_delete ($key) {}

/**
 * @param $keys
 */
function apc_delete_file ($keys) {}

/**
 * (PECL apc &gt;= 3.0.0)<br/>
 * Defines a set of constants for retrieval and mass-definition
 * @link http://php.net/manual/en/function.apc-define-constants.php
 * @param string $key <p>
 * The key serves as the name of the constant set
 * being stored. This key is used to retrieve the
 * stored constants in apc_load_constants.
 * </p>
 * @param array $constants <p>
 * An associative array of constant_name => value
 * pairs. The constant_name must follow the normal
 * constant naming rules.
 * value must evaluate to a scalar value.
 * </p>
 * @param bool $case_sensitive [optional] <p>
 * The default behaviour for constants is to be declared case-sensitive;
 * i.e. CONSTANT and Constant
 * represent different values. If this parameter evaluates to false the
 * constants will be declared as case-insensitive symbols.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function apc_define_constants ($key, $constantsarray , $case_sensitive = null) {}

/**
 * (PECL apc &gt;= 3.0.0)<br/>
 * Loads a set of constants from the cache
 * @link http://php.net/manual/en/function.apc-load-constants.php
 * @param string $key <p>
 * The name of the constant set (that was stored with
 * apc_define_constants) to be retrieved.
 * </p>
 * @param bool $case_sensitive [optional] <p>
 * The default behaviour for constants is to be declared case-sensitive;
 * i.e. CONSTANT and Constant
 * represent different values. If this parameter evaluates to false the
 * constants will be declared as case-insensitive symbols.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function apc_load_constants ($key, $case_sensitive = null) {}

/**
 * (PECL apc &gt;= 3.0.13)<br/>
 * Stores a file in the bytecode cache, bypassing all filters.
 * @link http://php.net/manual/en/function.apc-compile-file.php
 * @param string $filename <p>
 * Full or relative path to a PHP file that will be compiled and stored in
 * the bytecode cache.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function apc_compile_file ($filename) {}

/**
 * (PECL apc &gt;= 3.0.13)<br/>
 * Cache a variable in the data store
 * @link http://php.net/manual/en/function.apc-add.php
 * @param string $key <p>
 * Store the variable using this name. keys are
 * cache-unique, so attempting to use apc_add to
 * store data with a key that already exists will not overwrite the
 * existing data, and will instead return false. (This is the only
 * difference between apc_add and
 * apc_store.)
 * </p>
 * @param mixed $var <p>
 * The variable to store
 * </p>
 * @param int $ttl [optional] <p>
 * Time To Live; store var in the cache for
 * ttl seconds. After the
 * ttl has passed, the stored variable will be
 * expunged from the cache (on the next request). If no ttl
 * is supplied (or if the ttl is
 * 0), the value will persist until it is removed from
 * the cache manually, or otherwise fails to exist in the cache (clear,
 * restart, etc.).
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function apc_add ($key, $var, $ttl = null) {}

/**
 * @param $key
 * @param $step [optional]
 * @param $success [optional]
 */
function apc_inc ($key, $step, &$success) {}

/**
 * @param $key
 * @param $step [optional]
 * @param $success [optional]
 */
function apc_dec ($key, $step, &$success) {}

/**
 * @param $key
 * @param $old
 * @param $new
 */
function apc_cas ($key, $old, $new) {}

/**
 * @param $files [optional]
 * @param $user_vars [optional]
 */
function apc_bin_dump ($files, $user_vars) {}

/**
 * @param $data
 * @param $flags [optional]
 */
function apc_bin_load ($data, $flags) {}

/**
 * @param $files
 * @param $user_vars
 * @param $filename
 * @param $flags [optional]
 * @param $context [optional]
 */
function apc_bin_dumpfile ($files, $user_vars, $filename, $flags, $context) {}

/**
 * @param $filename
 * @param $context [optional]
 * @param $flags [optional]
 */
function apc_bin_loadfile ($filename, $context, $flags) {}

// End of apc v.3.1.3p1
?>
