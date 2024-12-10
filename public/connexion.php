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
    <link rel="icon" href="/Photo/Hotel-Neptune-logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Connexion</title>
</head>
<body>
<a href="index.php" class="btn btn-primary m-2"><h4>Retour à l'accueil</h4></a>
<div class="container">
    <form class="w-75 mx-auto" method="POST" action="">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Mail : </label>
        <input type="email" name="mail" placeholder="Adresse mail" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Mot de passe : </label>
        <input type="password" name="password" placeholder="Mot de passe" required class="form-control" id="exampleInputPassword1">
      </div>
      <input type="submit" value="Se connecter" class="btn btn-primary">
    </form>
</div>
</body>
</html>