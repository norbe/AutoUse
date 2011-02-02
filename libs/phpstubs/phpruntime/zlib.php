<?php

// Start of zlib v.1.1

/**
 * (PHP 4, PHP 5)<br/>
 * Output a gz-file
 * @link http://php.net/manual/en/function.readgzfile.php
 * @param string $filename <p>
 * The file name. This file will be opened from the filesystem and its
 * contents written to standard output.
 * </p>
 * @param int $use_include_path [optional] <p>
 * You can set this optional parameter to 1, if you
 * want to search for the file in the include_path too.
 * </p>
 * @return int the number of (uncompressed) bytes read from the file. If
 * an error occurs, false is returned and unless the function was
 * called as @readgzfile, an error message is
 * printed.
 */
function readgzfile ($filename, $use_include_path = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Rewind the position of a gz-file pointer
 * @link http://php.net/manual/en/function.gzrewind.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function gzrewind ($zp) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Close an open gz-file pointer
 * @link http://php.net/manual/en/function.gzclose.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @return bool Returns true on success or false on failure.
 */
function gzclose ($zp) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Test for <acronym>EOF</acronym> on a gz-file pointer
 * @link http://php.net/manual/en/function.gzeof.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @return int true if the gz-file pointer is at EOF or an error occurs;
 * otherwise returns false.
 */
function gzeof ($zp) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Get character from gz-file pointer
 * @link http://php.net/manual/en/function.gzgetc.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @return string The uncompressed character or false on EOF (unlike gzeof).
 */
function gzgetc ($zp) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Get line from file pointer
 * @link http://php.net/manual/en/function.gzgets.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @param int $length <p>
 * The length of data to get.
 * </p>
 * @return string The uncompressed string, or false on error.
 */
function gzgets ($zp, $length) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Get line from gz-file pointer and strip HTML tags
 * @link http://php.net/manual/en/function.gzgetss.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @param int $length <p>
 * The length of data to get.
 * </p>
 * @param string $allowable_tags [optional] <p>
 * You can use this optional parameter to specify tags which should not 
 * be stripped.
 * </p>
 * @return string The uncompressed and striped string, or false on error.
 */
function gzgetss ($zp, $length, $allowable_tags = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Binary-safe gz-file read
 * @link http://php.net/manual/en/function.gzread.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @param int $length <p>
 * The number of bytes to read.
 * </p>
 * @return string The data that have been read.
 */
function gzread ($zp, $length) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Open gz-file
 * @link http://php.net/manual/en/function.gzopen.php
 * @param string $filename <p>
 * The file name.
 * </p>
 * @param string $mode <p>
 * As in fopen (rb or 
 * wb) but can also include a compression level 
 * (wb9) or a strategy: f for
 * filtered data as in wb6f, h for
 * Huffman only compression as in wb1h.
 * (See the description of deflateInit2
 * in zlib.h for 
 * more information about the strategy parameter.)
 * </p>
 * @param int $use_include_path [optional] <p>
 * You can set this optional parameter to 1, if you
 * want to search for the file in the include_path too.
 * </p>
 * @return resource a file pointer to the file opened, after that, everything you read
 * from this file descriptor will be transparently decompressed and what you 
 * write gets compressed.
 * </p>
 * <p>
 * If the open fails, the function returns false.
 */
function gzopen ($filename, $mode, $use_include_path = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Output all remaining data on a gz-file pointer
 * @link http://php.net/manual/en/function.gzpassthru.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @return int The number of uncompressed characters read from gz
 * and passed through to the input, or false on error.
 */
function gzpassthru ($zp) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Seek on a gz-file pointer
 * @link http://php.net/manual/en/function.gzseek.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @param int $offset <p>
 * The seeked offset.
 * </p>
 * @param int $whence [optional] <p>
 * whence values are:
 * SEEK_SET - Set position equal to offset bytes.
 * SEEK_CUR - Set position to current location plus offset.
 * </p>
 * <p>
 * If whence is not specified, it is assumed to be
 * SEEK_SET.
 * </p>
 * @return int Upon success, returns 0; otherwise, returns -1. Note that seeking
 * past EOF is not considered an error.
 */
function gzseek ($zp, $offset, $whence = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Tell gz-file pointer read/write position
 * @link http://php.net/manual/en/function.gztell.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @return int The position of the file pointer or false if an error occurs.
 */
function gztell ($zp) {}

/**
 * (PHP 4, PHP 5)<br/>
 * Binary-safe gz-file write
 * @link http://php.net/manual/en/function.gzwrite.php
 * @param resource $zp <p>
 * The gz-file pointer. It must be valid, and must point to a file
 * successfully opened by gzopen.
 * </p>
 * @param string $string <p>
 * The string to write.
 * </p>
 * @param int $length [optional] <p>
 * The number of uncompressed bytes to write. If supplied, writing will 
 * stop after length (uncompressed) bytes have been
 * written or the end of string is reached,
 * whichever comes first.
 * </p>
 * <p>
 * Note that if the length argument is given,
 * then the magic_quotes_runtime
 * configuration option will be ignored and no slashes will be
 * stripped from string.
 * </p>
 * @return int the number of (uncompressed) bytes written to the given gz-file 
 * stream.
 */
function gzwrite ($zp, $string, $length = null) {}

/**
 * (PHP 4, PHP 5)<br/>
 * &Alias; <function>gzwrite</function>
 * @link http://php.net/manual/en/function.gzputs.php
 */
function gzputs () {}

/**
 * (PHP 4, PHP 5)<br/>
 * Read entire gz-file into an array
 * @link http://php.net/manual/en/function.gzfile.php
 * @param string $filename <p>
 * The file name.
 * </p>
 * @param int $use_include_path [optional] <p>
 * You can set this optional parameter to 1, if you
 * want to search for the file in the include_path too.
 * </p>
 * @return array An array containing the file, one line per cell.
 */
function gzfile ($filename, $use_include_path = null) {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5)<br/>
 * Compress a string
 * @link http://php.net/manual/en/function.gzcompress.php
 * @param string $data <p>
 * The data to compress.
 * </p>
 * @param int $level [optional] <p>
 * The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression.
 * </p>
 * @return string The compressed string or false if an error occurred.
 */
function gzcompress ($data, $level = null) {}

/**
 * (PHP 4 &gt;= 4.0.1, PHP 5)<br/>
 * Uncompress a compressed string
 * @link http://php.net/manual/en/function.gzuncompress.php
 * @param string $data <p>
 * The data compressed by gzcompress.
 * </p>
 * @param int $length [optional] <p>
 * The maximum length of data to decode.
 * </p>
 * @return string The original uncompressed data or false on error.
 * </p>
 * <p>
 * The function will return an error if the uncompressed data is more than
 * 32768 times the length of the compressed input data 
 * or more than the optional parameter length.
 */
function gzuncompress ($data, $length = null) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5)<br/>
 * Deflate a string
 * @link http://php.net/manual/en/function.gzdeflate.php
 * @param string $data <p>
 * The data to deflate.
 * </p>
 * @param int $level [optional] <p>
 * The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression. If not given, the default compression level will
 * be the default compression level of the zlib library.
 * </p>
 * @return string The deflated string or false if an error occurred.
 */
function gzdeflate ($data, $level = null) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5)<br/>
 * Inflate a deflated string
 * @link http://php.net/manual/en/function.gzinflate.php
 * @param string $data <p>
 * The data compressed by gzdeflate.
 * </p>
 * @param int $length [optional] <p>
 * The maximum length of data to decode.
 * </p>
 * @return string The original uncompressed data or false on error.
 * </p>
 * <p>
 * The function will return an error if the uncompressed data is more than
 * 32768 times the length of the compressed input data 
 * or more than the optional parameter length.
 */
function gzinflate ($data, $length = null) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5)<br/>
 * Create a gzip compressed string
 * @link http://php.net/manual/en/function.gzencode.php
 * @param string $data <p>
 * The data to encode.
 * </p>
 * @param int $level [optional] <p>
 * The level of compression. Can be given as 0 for no compression up to 9
 * for maximum compression. If not given, the default compression level will
 * be the default compression level of the zlib library.
 * </p>
 * @param int $encoding_mode [optional] <p>
 * The encoding mode. Can be FORCE_GZIP (the default)
 * or FORCE_DEFLATE. 
 * </p>
 * <p>
 * If you use FORCE_DEFLATE, you get a standard zlib
 * deflated string (inclusive zlib headers) after the gzip file header but
 * without the trailing crc32 checksum.
 * </p>
 * @return string The encoded string, or false if an error occurred.
 */
function gzencode ($data, $level = null, $encoding_mode = null) {}

/**
 * (PHP 4 &gt;= 4.0.4, PHP 5)<br/>
 * ob_start callback function to gzip output buffer
 * @link http://php.net/manual/en/function.ob-gzhandler.php
 * @param string $buffer <p>
 * </p>
 * @param int $mode <p>
 * </p>
 * @return string 
 */
function ob_gzhandler ($buffer, $mode) {}

/**
 * (PHP 4 &gt;= 4.3.2, PHP 5)<br/>
 * Returns the coding type used for output compression
 * @link http://php.net/manual/en/function.zlib-get-coding-type.php
 * @return string Possible return values are gzip, deflate,
 * or false.
 */
function zlib_get_coding_type () {}

define ('FORCE_GZIP', 1);
define ('FORCE_DEFLATE', 2);

// End of zlib v.1.1
?>
