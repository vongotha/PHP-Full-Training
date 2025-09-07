<?php

var_dump($_SESSION['user']['email']);
$heading = "Home";
views("index.view.php", [
    'heading' => $heading,
]);