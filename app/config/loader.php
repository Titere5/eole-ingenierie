<?php

$loader = new \Phalcon\Loader();


/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs([
    APP_PATH . $config->application->controllersDir,
    APP_PATH . $config->application->pluginsDir,
    APP_PATH . $config->application->libraryDir,
    APP_PATH . $config->application->modelsDir,
    APP_PATH . $config->application->formsDir
])->register();

$loader->registerNamespaces([
    'Eole-ingenierie54\Models'      => APP_PATH . $config->application->modelsDir,
    'Eole-ingenierie54\Controllers' => APP_PATH . $config->application->controllersDir,
    'Eole-ingenierie54\Forms'       => APP_PATH . $config->application->formsDir,
    'Eole-ingenierie54'             => APP_PATH . $config->application->libraryDir,
])->register();

$loader->registerClasses([
    'Services' => APP_PATH . 'app/Services.php'
]);
