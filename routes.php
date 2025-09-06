<?php

use Core\Router;

$router->get('/demo', 'index.php');
$router->get('/demo/about', 'about.php');
$router->get('/demo/contact', 'contact.php');


    $router->get('/demo/notes', 'notes/index.php')->only('auth');
    $router->get('/demo/note', 'notes/show.php');
    $router->delete('/demo/note', 'notes/destroy.php');

    $router->get('/demo/note/edit', 'notes/edit.php');
    $router->patch('/demo/note', 'notes/update.php');

    $router->get('/demo/note/create', 'notes/create.php');
    $router->post('/demo/notes', 'notes/store.php');

    $router->get('/demo/register', 'registration/create.php')->only('guest');
    $router->post('/demo/register', 'registration/store.php')->only('guest');

    $router->get('/demo/login', 'session/create.php')->only('guest');
    $router->post('/demo/session', 'session/store.php')->only('guest');
    $router->delete('/demo/session', 'session/destroy.php')->only('auth');

