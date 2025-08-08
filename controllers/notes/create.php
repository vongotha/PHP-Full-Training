<?php

require base_path('core/validator.php');

// connect to our MySQL database
$config = require base_path('config.php');

$db = new Database($config['database'], 'root', '');

// Email validation exampleg
/*
$email_test = "ffffah";
if (!Validator::email($email_test)) {
    dd("Invalid email format.");
} else {
    dd(Validator::email($email_test), "Email format is valid.");
}

*/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (! Validator::string($_POST['body'], 1, 500)) {
            $errors['body'] = "A body of no more than 500 characters is required.";
        }

        if (empty($errors)){
            $db->query("INSERT INTO `notes` (`body`, `user_id`) VALUES (:body, :user_id)", 
        [
                'body' => $_POST['body'],
                'user_id' => 3
            ]);
        }

    }

views("notes/create.view.php", [
    'heading' => "Create Note",
    'errors' => $errors
]);