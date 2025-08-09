<?php

/*
    return [
        '/' => 'controllers/index.php',
        '/demo' => 'controllers/index.php',
        '/demo/about' => 'controllers/about.php',
        '/demo/notes' => 'controllers/notes/index.php',
        '/demo/note' => 'controllers/notes/show.php',
        '/demo/note/create' => 'controllers/notes/create.php',
        '/demo/contact' => 'controllers/contact.php'
    ]; */

    $router->get('/', 'controller/index.php');
    $router->get('/note', 'controller/destrpy.php');

    dd($router->routes);
    