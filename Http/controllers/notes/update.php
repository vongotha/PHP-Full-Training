<?php


use Core\App;
use Core\Database; 
use Core\Validator; 

$config = require base_path('config.php');
$db = new Database($config['database']);
$db = App::resolve(Database::class);

$currentUserId = 3;

$note = $db->query("select * from notes where  id = :id;", 
['id' => $_POST['id']])->findOrFail();

authorize($note['user_id'] === $currentUserId);

$errors = [];

if (! Validator::string($_POST['body'], 1, 1000)) {
    $errors['body'] = "A body of no more than 1000 characters is required.";
}
 
if (count($errors)) {
    return views("notes/edit.view.php", [
        'heading' => "Edit Note",
        'errors' => $errors,
        "note" => $note
    ]);
}

$db->query("UPDATE notes SET body = :body WHERE id = :id", 
[
    'id' => $_POST['id'],
    'body' => $_POST['body']
]);

header('location: /demo/notes');
die();