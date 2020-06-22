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

/**
 * We're a registering a set of namespaces
 */
$loader->registerNamespaces([
    'eole-ingenierie54\Models'      => APP_PATH . $config->application->modelsDir,
    'eole-ingenierie54\Controllers' => APP_PATH . $config->application->controllersDir,
    'eole-ingenierie54\Forms'       => APP_PATH . $config->application->formsDir,
    'eole-ingenierie54'             => APP_PATH . $config->application->libraryDir,
])->register();

$loader->registerClasses([
    'Services' => APP_PATH . 'app/Services.php'
]);
