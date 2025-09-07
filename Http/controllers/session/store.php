<?php

<<<<<<< HEAD
use Core\Session;
use Core\Authenticator;
use Http\Forms\LoginForm;

var_dump("BEGIN");

=======


use Core\Authenticator;
use Http\Forms\LoginForm;

>>>>>>> ec8778e6315ff47c7b7853ad77e225949ffdc87d
$email = $_POST['email'];
$password = $_POST['password'];


$form = new LoginForm();


if ( $form->validate($email, $password)) {

    $auth = new Authenticator();
    
    if ($auth->attempt($email, $password)) {
        redirect('/demo');
    } else {
        $form->error('email', 'No user found with that email and password combination.');
    }
}

<<<<<<< HEAD
Session::flash('errors', $form->errors());

=======
>>>>>>> ec8778e6315ff47c7b7853ad77e225949ffdc87d
return views("session/create.view.php", [
    'errors' => $form->errors()
]);
