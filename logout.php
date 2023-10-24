<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// session_unset();
$_SESSION = [];
session_destroy();

include __DIR__ . '/Partials/Head.php';

/* 
var_dump($_SESSION);

var_dump(session_status(), "
_DISABLED = 0
_NONE = 1
_ACTIVE = 2");
 */
header('Location: ./index.php');
