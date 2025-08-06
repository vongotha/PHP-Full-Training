<?php

$heading = "My Notes";

// connect to our MySQL database
$config = require ('config.php');
$db = new Database($config['database'], 'root', '');

$notes = $db->query("select * from notes where user_id = 3;")->get();
//dd($notes);

require 'views/notes/index.view.php';