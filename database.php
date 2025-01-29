<?php

$user = "User";
$password = "Password_user";
$host = "database";
$dbname = "test";
$dsn  = "mysql:dbname=$dbname;host=$host";

try{
    $pdo = new PDO($dsn, $user, $password);
}   catch (\Throwable $th) {
    die("Erreur de connexion à la base de données : ".$th->getMessage());
}