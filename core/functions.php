<?php

use Core\Response;

function urls ($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}

function abort($code = 404) {
    http_response_code($code);
    base_path(views("{$code}.view.php"));

    die();
}

function authorize ($condition, $status = Response::FORBIDDEN) {
    if (! $condition) {
        abort($status);
    }
}


function base_path ($path = '') {
    return BASE_PATH . $path;

}

function views($path, $attributes = []) {
    extract($attributes);
    require base_path('views/' . $path);
};

function redirect ($path) {
    header("Location: {$path}");
    exit();
};