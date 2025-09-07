<?php

use Core\Session;
use Core\ValidationException;

const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'vendor/autoload.php';
session_start();

require BASE_PATH . 'core/functions.php';

require base_path('bootstrap.php');

require base_path('core/router.php');

$router = new \core\Router();

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];


try {
    $router->route($uri, $method);
} catch (ValidationException $exception) {
    Session::flash('errors', $exception->errors());
    Session::flash('old', $exception->old);

    return redirect($router->previousUrl());
}

// Flash the Session Data
Session::unflash();