<?php

    class Router {

        public $routes = [];
        public function get($uri, $controller) {
            $this->routes[] = [
                'uri' => $uri,
                'controller' => $controller,
                'method' => 'GET'
            ];
        }
        public function delete($uri, $controller) {
            $this->routes[] = [
                'uri' => $uri,
                'controller' => $controller,
                'method' => 'DELETE'
            ];
        }

        public function post($uri, $controller) {
            $this->routes[] = [
                    'uri' => $uri,
                    'controller' => $controller,
                    'method' => 'POST'
                ];
            }
        public function patch($uri, $controller) {
            $this->routes[] = [
                'uri' => $uri,
                'controller' => $controller,
                'method' => 'PATCH'
            ];
        }

        public function put($uri, $controller) {
            $this->routes[] = [
                    'uri' => $uri,
                    'controller' => $controller,
                    'method' => 'PUT'
                ];
            }
        }
/*
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