<?php

$_SESSION = [];

session_get_cookie_params();
setcookie('PHPSESSID', '', time() - 3600, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

header('location: /demo');
exit();