<?php

/**
 * WebResult System bootstrap file.
 *
 * @package    WRS
 */

use Nette\Debug;
use Nette\Environment;
use Nette\Application\SimpleRouter;

// Step 1: Load Nette Framework
// this allows load Nette Framework classes automatically so that
// you don't have to litter your code with 'require' statements
require_once LIBS_DIR . '/Nette/loader.php';


// Step 2: Configure environment
// 2a) enable Nette\Debug for better exception and error visualisation
Debug::$strictMode = true;
Debug::enable();

// 2b) load configuration from config.ini file
Environment::loadConfig();

// 2c) check if directory /app/temp is writable
if (@file_put_contents(Environment::expand('%tempDir%/_check'), '') === FALSE) {
	throw new Exception("Make directory '" . Environment::getVariable('tempDir') . "' writable!");
}

// 2d) setup sessions
$session = Environment::getSession();
$session->start();

// Step 3: Setup application router
$application = Environment::getApplication();

$router = $application->getRouter();
$router[] = new SimpleRouter(array("presenter" => "AutoUse"));

// Step 5: Run the application!
$application->run();


