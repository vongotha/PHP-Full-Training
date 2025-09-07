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

<<<<<<< HEAD
function redirect ($path) {
    header("Location: {$path}");
    exit();
};
=======
<<<<<<< HEAD
function redirect ($path) {
    header("Location: {$path}");
    exit();
=======
function login ($user) {
    $_SESSION['user'] = [
        'email' => $user['email']
    ];

    session_regenerate_id(true);

}

function logout () {
    $_SESSION = [];

    session_destroy();

    $params = session_get_cookie_params();
    setcookie('PHPSESSID', '', time() - 3600, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
>>>>>>> 5d568d9cb9ea815b278ad2e87afa8c4418a72de6
}
>>>>>>> ec8778e6315ff47c7b7853ad77e225949ffdc87d
