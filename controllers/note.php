<?php




// connect to our MySQL database
$config = require ('config.php');
$db = new Database($config['database'], 'root', '');

$heading = "Note";

$note = $db->query("select * from notes where  id = :id;", 
['id' => $_GET['id']])->findOrFail();

if (!$note) {
    abort();
}

$currentUserId = 3;

authorize($note['user_id'] === $currentUserId);


//dd($note);

require 'views/note.view.php';