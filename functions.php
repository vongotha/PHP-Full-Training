<?php

function urls ($url) {
    return $_SERVER['REQUEST_URI'] === $url;
}

function dd($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
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
    $attributes = is_array($attributes) ? $attributes : []; 
    extract($attributes);
    require base_path('views/' . $path);
}