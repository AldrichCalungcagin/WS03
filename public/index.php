<?php 
    // define('BASE_PATH',
    // dirname(__DIR__));

    require '../views/home.view.php' ;
    require '../helpers/php';
    // loadView('head');

    // New lines
    require '../helpers.php';
    $routes = [
        '/' => 'controllers/home.php',
        '/listings' => 'controllers/listings/index.php',
        '/listings/create' => 'controllers/listings/create/.php',
        '404' => 'controller/error/404.php'
    ];

    $uri = $_SERVER['REQUEST_URI'];
    if (array_key_exists($uri, $routes)) {
        require (basePath($routes($uri)));
    } else {
        require basePath($routes['404']);
    }
?>