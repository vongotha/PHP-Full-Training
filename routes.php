<?php

use Core\Router;



$router->get('/demo', 'controllers/index.php');
$router->get('/demo/about', 'controllers/about.php');
$router->get('/demo/contact', 'controllers/contact.php');


    $router->get('/demo/notes', 'controllers/notes/index.php');
    $router->get('/demo/note', 'controllers/notes/show.php');
    $router->delete('/demo/note', 'controllers/notes/destroy.php');
    $router->get('/demo/note/create', 'controllers/notes/create.php');
