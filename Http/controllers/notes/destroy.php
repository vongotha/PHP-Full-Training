<?php

use Core\App;
use Core\Database;
// connect to our MySQL database
$config = require base_path('config.php');
$db = new Database($config['database'], 'root', '');

$db = App::resolve(Database::class);

$currentUserId = 3;

$note = $db->query("select * from notes where  id = :id;", 
['id' => $_POST['id']])->findOrFail();



    $note = $db->query("select * from notes where  id = :id;", 
['id' => $_POST['id']])->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    $db->query("delete from notes where id = :id", [
        'id' => $_POST['id']
    ]);


    header('location: /demo/notes');
    exit();

