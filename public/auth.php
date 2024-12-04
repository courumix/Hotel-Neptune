<?php
session_start();
require_once 'Helper.php';


// Valeur par défaut
$stored_login = "titeuf";
$stored_password = "toteuf";

$login = getVar ( "login");
$password = getVar ( "password");

if (! is_bool ( $login ) && ! is_bool ( $password )) {
    if($login == $stored_login && $password == $stored_password){
        $_SESSION['login'] = $login;
        // Authentification réussie
        return header("Location: index.php");

    }
    else{
    header("Location: connexion.php");
    }
}
else{
    echo "vous n'avez pas entrez de mot de passe";
}
// Authentification échoué

?>