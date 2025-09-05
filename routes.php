<?php

use Core\Router;

$router->get('/demo', 'controllers/index.php');
$router->get('/demo/about', 'controllers/about.php');
$router->get('/demo/contact', 'controllers/contact.php');


    $router->get('/demo/notes', 'controllers/notes/index.php')->only('auth');
    $router->get('/demo/note', 'controllers/notes/show.php');
    $router->delete('/demo/note', 'controllers/notes/destroy.php');

    $router->get('/demo/note/edit', 'controllers/notes/edit.php');
    $router->patch('/demo/note', 'controllers/notes/update.php');

    $router->get('/demo/note/create', 'controllers/notes/create.php');
    $router->post('/demo/notes', 'controllers/notes/store.php');

    $router->get('/demo/register', 'controllers/registration/create.php')->only('guest');
    $router->post('/demo/register', 'controllers/registration/store.php')->only('guest');

    $router->get('/demo/login', 'controllers/session/create.php')->only('guest');
    $router->post('/demo/session', 'controllers/session/store.php')->only('guest');
    $router->delete('/demo/session', 'controllers/session/destroy.php')->only('auth');

