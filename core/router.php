<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $routes = require base_path('routes.php');

    function routeToController($uri, $routes) {
        if (array_key_exists($uri, $routes)) {
            require base_path($routes[$uri]);
        } else {
            abort();
        }
    }
    function abort($code = 404) {
        http_response_code($code);
        base_path(views("{$code}.view.php"));

        die();
    }
    
    routeToController($uri, $routes);