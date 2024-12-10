<?php

<<<<<<< HEAD
$user = "app";
$password = "app_password";
$host = "database";
$dbname = "app";
$dsn  = "mysql:dbname=$dbname;host=$host";

try{
    $pdo = new PDO($dsn, $user, $password);
}   catch (\Throwable $th) {
    die("Erreur de connexion à la base de données : ".$th->getMessage());
}
=======
$user ='app';
$password = 'app_password';
$host = 'database';
$dbname = 'app';
$dns = "mysql:dbname=$dbname;host=$host";

try {
    $pdo = new PDO($dns, $user, $password);
} catch (\Throwable $th) {
    die('Erreur de connexion à la base de données : ' . $th->getMessage());
}

?>
>>>>>>> 8584277e0d5c897b2f7571c85ca13b32369a9930
