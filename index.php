<?php

// absolute filesystem path to the web root
define('WWW_DIR', dirname(__FILE__));

// absolute filesystem path to the application root
define('APP_DIR', WWW_DIR . '/app');

// absolute filesystem path to the libraries
define('LIBS_DIR', WWW_DIR . '/libs');

// path to the public directory (relative to WWW_DIR)
define('PUBLIC_DIR', 'public');

set_time_limit("3600");

// load bootstrap file
require APP_DIR . '/bootstrap.php';
