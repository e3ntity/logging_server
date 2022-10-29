<?php

define('DEBUG', false);

// Define basic paths
define('ROOT', dirname(__DIR__) . '/');
define('APP', ROOT . 'app/');
define('VIEW', ROOT . 'view/');
define('LOGS', ROOT . 'logs/');

require(APP . 'secret.php');

// Setup configuration
$config = [
    'accessCode' => $secret['accessCode'],
    'displayErrorDetails' => false
];
