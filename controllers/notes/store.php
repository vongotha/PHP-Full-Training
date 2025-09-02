<?php

use Core\App;
use Core\Validator;
use Core\Database;

// connect to our MySQL database
$config = require base_path('config.php');
$db = new Database($config['database']);
$db = App::resolve(Database::class);


$errors = [];

if (! Validator::string($_POST['body'], 1, 500)) {
    $errors['body'] = "A body of no more than 500 characters is required.";
}



if (! empty($errors)) {
    return views("notes/create.view.php", [
        'heading' => "Create Note",
        'errors' => $errors
    ]);
}

$db->query("INSERT INTO `notes` (`body`, `user_id`) VALUES (:body, :user_id)", 
[
    'body' => $_POST['body'],
    'user_id' => 3
]);

header('location: /demo/notes');
die();
