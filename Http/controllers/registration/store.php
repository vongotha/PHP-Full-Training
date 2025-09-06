<?php

use Core\App;
use Core\Validator;
use Core\Database;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();

if (! $form->validate($email, $password)) {
    return views("session/create.view.php", [
        'errors' => $form->errors()
    ]);
} else {
    views("registration/create.view.php", [
        'errors' => $form->errors()
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


    login($user);

    header('location: /demo');
    exit();

}