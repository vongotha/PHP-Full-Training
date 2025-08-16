<?php

use Core\App;
use Core\Database;

// connect to our MySQL database
$config = require base_path('config.php');
$db = new Database($config['database']);

$db = App::resolve(Database::class);

$notes = $db->query("select * from notes where user_id = 3;")->get();
//dd($notes);


views("notes/index.view.php", [
    'heading' => "My Notes",
    'notes' => $notes
]);