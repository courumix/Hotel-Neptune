<?php

$user ='app';
$password = 'app_password';
$host = 'database';
$dbname = 'app';
$dns = "mysql:dbname = $dbname; host = $host";

try {
    $pdo = new PDO($dns, $user, $password);
} catch (\Throwable $th) {
    die('Erreur de connexion à la base de données : ' . $th->getMessage());
}

?>