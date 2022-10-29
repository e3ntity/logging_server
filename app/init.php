<?php

// Include libraries
require(__DIR__ . '/lib/vendor/autoload.php');

// Load configuration
require(__DIR__ . '/config.php');

/* Setup the slim framework */

$app = new \Slim\App([
    'settings' => $config
]);

require(APP . 'route.php');