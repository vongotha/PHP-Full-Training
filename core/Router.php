<?php

    namespace Core;
    class Router {

        public $routes = [];
        public function get($uri, $controller) {
            $this->add($uri, 'GET' ,$controller);
        }

        function add($uri, $method, $controller) {
            $this->routes[] = [
                'uri' => $uri,
                'controller' => $controller,
                'method' => $method
            ];
        }
        public function delete($uri, $controller) {
            $this->add($uri,'DELETE',$controller);
        }

        public function post($uri, $controller) {
            $this->add($uri,'POST',$controller);
            }
        public function patch($uri, $controller) {
            $this->add($uri, 'PATCH', $controller);
        }

        public function put($uri, $controller) {
            $this->add($uri, 'PUT', $controller);

        }

        public function only($key) {
            dd($key);
        }

        public function route($uri, $method) {
            foreach ($this->routes as $route) {
                if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {
                    return require base_path($route['controller']);
                }
            }

            $this->abort();
        }

        protected function abort($code = 404) {
            http_response_code($code);
            base_path(views("{$code}.view.php"));

            die();
        }
    }
     