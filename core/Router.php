<?php

    namespace Core;
    class Router {

        public $routes = [];
        public function get($uri, $controller) {
            return $this->add($uri, 'GET' ,$controller);
        }

        function add($uri, $method, $controller) {
            $this->routes[] = [
                'uri' => $uri,
                'controller' => $controller,
                'method' => $method,
                'middleware' => []
            ];

            return $this;
        }
        public function delete($uri, $controller) {
            return $this->add($uri,'DELETE',$controller);
        }

        public function post($uri, $controller) {
            return $this->add($uri,'POST',$controller);
            }
        public function patch($uri, $controller) {
            return $this->add($uri, 'PATCH', $controller);
        }

        public function put($uri, $controller) {
            return $this->add($uri, 'PUT', $controller);

        }

        public function only($key) {
            $this->routes[array_key_last($this->routes)]['middleware'] = $key;

            return $this;
        }

        public function route($uri, $method) {
            foreach ($this->routes as $route) {
                if ($route['uri'] === $uri && $route['method'] === strtoupper($method)) {

                    if ($route['middleware'] === 'guest' ) {
                        if ($_SESSION['user'] ?? false) {
                            header('location: /demo');
                            exit();
                        }
                    }
                    if ($route['middleware'] === 'auth' ) {
                        if (!($_SESSION['user'] ?? false)) {
                            header('location: /demo');
                            exit();
                        }
                    }

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
     