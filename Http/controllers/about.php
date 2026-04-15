<?php

//$uri = $_SERVER['REQUEST_URI'];
$heading = 'About Us';
views("about.view.php", [
    'heading' => $heading
]);