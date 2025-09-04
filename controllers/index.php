<?php

$_SESSION['Name'] = "Vongotha";
$_SESSION['Email'] = "vongotha@example.com";

$heading = "Home";
views("index.view.php", [
    'heading' => $heading,
]);