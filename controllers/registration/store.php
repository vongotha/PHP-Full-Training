<?php

use Core\App;
use Core\Validator;
use Core\Database;

$email = $_POST['email'];
$password = $_POST['password'];

if (!Validator::email($email)) {
    $errors['email'] = "Please enter a valid email address.";
}


if (!Validator::string($password, 7, 255)) {
    $errors['password'] = "Password must be between 7 and 255 characters.";
}


if (!empty($errors)) {
    views("registration/create.view.php", [
        'errors' => $errors
    ]);
    exit();
}

$db = App::resolve(Database::class);

$user = $db->query('select * from users where email = :email',
    [
        'email' => $email
    ]
)->find();

if ($user) {
    // cheschs if user already exists

    // Redirect to the Login Page
    header('location: /demo');

} else {
    $db->query('insert into users (email, password) values (:email, :password)', [
        'email' => $email,
        'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);


    login($usser);

    header('location: /demo');
    exit();

} 