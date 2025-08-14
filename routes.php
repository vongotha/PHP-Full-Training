<?php

use Core\Router;



$route->get('/', 'controller/index.php');
$route->get('/demo/about', 'controllers/about.php');
$route->get('/demo/contact', 'controllers/contact.php');
/*

    $route->get('/demo/notes', 'controllers/notes/index.php');
    $route->get('/demo/note', 'controllers/notes/show.php');
    $route->get('/demo/note/create', 'controllers/notes/create.php');
 */