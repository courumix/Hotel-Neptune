<?php

require_once __DIR__.'/../database.php';

    if(
        !isset($_POST['email'])
        || !isset($_POST['password'])
        ){
            $message = 'Il manque une information.';
            header('Location: /error.php?message= '. urlencode($message));
            exit;
        }
    

    if(
        empty($_POST['email'])
        || empty($_POST['password'])
        ){
            $message = 'Tous les chamsp doivent être renseignés.';
            header('Location: /error.php?message= '. urlencode($message));
            exit;
        }

    $query = $pdo -> prepare('SELECT * FROM users WHERE users.email = :email');
    $query->execute(['email' => $_POST ['email']]);
    $user = $query->fetch();

    if (!$user) {
        $message = 'Aucun utilisateur pour L\email ' . $_POST ;['email'] . '.';
        header('Location: /error.php?message= '. urlencode($message));
        exit;
    }

    $passwordDoNotMatch = !$password_verify($_POST['password'], $user['password']);

    if ($passwordDoNotMatch) {
        $message='L\identifiant et le mot de passe ne correspondent pas. ';
        header('Location: /error.php?message= '. urlencode($message));
        exit;
    }

    session_start();
    $_SESSION = [
        'user' => $user,
    ];

    header('location: /');
    exit;

?>   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel Neptune</title>
</head>
<body>
    <div class="container my-5">
        <form action="" methode="Post">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mot de Passe" required>
        </form>
    </div>
</body>
</html>