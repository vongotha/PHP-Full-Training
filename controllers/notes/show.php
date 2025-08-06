<?php


// connect to our MySQL database
$config = require base_path('config.php');
$db = new Database($config['database'], 'root', '');


$note = $db->query("select * from notes where  id = :id;", 
['id' => $_GET['id']])->findOrFail();

if (!$note) {
    abort();
}

$currentUserId = 3;

authorize($note['user_id'] === $currentUserId);

 
//dd($note);

views("notes/show.view.php", [
    'heading' => "Note",
    'note' => $note
]);