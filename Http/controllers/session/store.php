<?php

use Core\Session;
use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

$form->validate($email, $password);

    if ((new Authenticator())->attempt($email, $password)) {
        redirect('/demo');
    } else {
        $form->error('email', 'No user found with that email and password combination.');
    }

Session::flash('errors', $form->errors());

Session::flash('old', [
    'email' => $_POST['email']
]);

return views("session/create.view.php", [
    'errors' => $form->errors()
]);
