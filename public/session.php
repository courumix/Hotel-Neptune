<?php

<<<<<<< HEAD
if(isset($_COOKIE['PHPSESSID'])) {
=======
if(isset($_COOKIE ['PHPSESSID'])) {
>>>>>>> 8584277e0d5c897b2f7571c85ca13b32369a9930
    session_start();
}

$isLoggedIn = isset($_SESSION) && isset($_SESSION['user']);
<<<<<<< HEAD

=======
>>>>>>> 8584277e0d5c897b2f7571c85ca13b32369a9930
?>