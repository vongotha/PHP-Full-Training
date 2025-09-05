<?php

    namespace Core;

    use Core\Middleware\Guest;
    use Core\Middleware\Auth;
    use Core\Middleware\Middleware;

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
                'middleware' => null
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
                    Middleware::resolve($route['middleware']);

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
     