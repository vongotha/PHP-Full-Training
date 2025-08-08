<?php

    use Core\Database;
    // connect to our MySQL database
    $config = require base_path('config.php');
    $db = new Database($config['database'], 'root', '');


    $note = $db->query("select * from notes where  id = :id;", 
    ['id' => $_GET['id']])->findOrFail();


    $currentUserId = 113;
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $note = $db->query("select * from notes where  id = :id;", 
    ['id' => $_GET['id']])->findOrFail();

        authorize($note['user_id'] === $currentUserId);

        $db->query("delete from notes where id = :id", [
            'id' => $_GET['id']
        ]);


        header('location: /demo/notes');
        exit();

    } else {
        $note = $db->query("select * from notes where  id = :id;", 
    ['id' => $_GET['id']])->findOrFail();
        
        authorize($note['user_id'] === $currentUserId);

        views("notes/show.view.php", [
            'heading' => "Note",
            'note' => $note
        ]); 

    }
