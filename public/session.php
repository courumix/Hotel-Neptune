<?php

if(isset($_COOKIE['PHPSESSID'])) {
    session_start();
}

$isLoggedIn = isset($_SESSION) && isset($_SESSION['user']);

?>