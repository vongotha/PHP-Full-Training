<?php

use Core\Session;
use Core\Authenticator;
use Http\Forms\LoginForm;

var_dump("BEGIN");

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();

if ($form->validate($email, $password)) {
    $auth = new Authenticator();

    if ($auth->attempt($email, $password)) {
        redirect('/demo');
    } else {
        $form->error('email', 'No user found with that email and password combination.');
    }
}

Session::flash('errors', $form->errors());

return views("session/create.view.php", [
    'errors' => $form->errors()
]);
