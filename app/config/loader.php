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
<<<<<<< HEAD
    'eole-ingenierie54\Models'      => APP_PATH . $config->application->modelsDir,
    'eole-ingenierie54\Controllers' => APP_PATH . $config->application->controllersDir,
    'eole-ingenierie54\Forms'       => APP_PATH . $config->application->formsDir,
    'eole-ingenierie54'             => APP_PATH . $config->application->libraryDir,
=======
    'espacefurcan\Models'      => APP_PATH . $config->application->modelsDir,
    'espacefurcan\Controllers' => APP_PATH . $config->application->controllersDir,
    'espacefurcan\Forms'       => APP_PATH . $config->application->formsDir,
    'espacefurcan'             => APP_PATH . $config->application->libraryDir,
>>>>>>> 1e572eb5ed5980298a131e69c7da9a677df3a9c8
])->register();

$loader->registerClasses([
    'Services' => APP_PATH . 'app/Services.php'
]);
