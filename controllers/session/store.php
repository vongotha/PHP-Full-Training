<?php


use Core\App;
use Core\Validator;
use Core\Database;


$db = App::resolve(Database::class);

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = "Please enter a valid email address.";
}


if (!Validator::string($password)) {
    $errors['password'] = "Password must be a valid password.";
}

if (!empty($errors)) {
    views("session/create.view.php", [
        'errors' => $errors
    ]);
    exit();
}

$user = $db->query('select * from users where email = :email',
    [
        'email' => $email
    ]
)->find();

if (! $user) {
    $errors['email'] = "No user with that email address exists.";
    views("session/create.view.php", [
        'errors' => $errors
    ]);
    exit();
}

if (password_verify($password, $user['password'])) {
    
    login([
        'email' => $user['email']
    ]);

    header('location: /demo');
    exit();
}


views("session/create.view.php", [
    'errors' => [
        'password' => 'No matching account found for that email address and password.'
    ]
]);