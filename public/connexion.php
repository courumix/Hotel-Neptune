<?php

require_once __DIR__ . '/../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['mail']) 
    || empty($_POST['password']))
    {
        $message = 'il manque des informations.';
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }

    if (empty($_POST['mail']) 
    || empty($_POST['password']))
    {
        $message = 'Tout les champs ne sont pas remplies';
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }

    $querry = $pdo->prepare('SELECT * FROM users WHERE users.email = :email');
    $querry->execute(['email' => $_POST['mail']]);
    $user = $querry->fetch();

    if(!$user) {
        $message = "Aucun utilisateur pour l'email " . $_POST['mail'] . '.';
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }

    if(!password_verify($_POST['password'], $user['password'])){
        $message = "L'identifiant ou le mot de passe n'est pas correct";
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }
    
    session_start();
    $_SESSION = [
        'user' => $user,
    ];

    header('Location: /');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Connexion</title>
</head>
<body>
    <form method="POST" action="">
        Mail : <input type="email" name="mail" placeholder="Adresse mail" required>
        <br>
        Password : <input type="password" name="password" placeholder="Mot de passe" required>
        <br>
        <input type="submit" value="Se connecter">
        </div>
    </form>
<a href="index.php"><h1>Retour à l'accueil</h1></a>
</body>
</html>