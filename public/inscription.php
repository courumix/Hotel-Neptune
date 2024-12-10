<?php
require_once __DIR__ . '/../database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['newfirstname'])
    || !isset($_POST['newlastname']) 
    || !isset($_POST['newpassword']) 
    || !isset($_POST['newmail']))
    {
        $message = 'il manque des informations.';
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }

    if (empty($_POST['newfirstname'])
    || empty($_POST['newlastname']) 
    || empty($_POST['newpassword']) 
    || empty($_POST['newmail']))
    {
        $message = 'Tout les champs ne sont pas remplies';
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }

    $query = $pdo->prepare('SELECT * FROM users WHERE users.email = :email');
    $query->execute(['email' => $_POST['newmail']]);

    if ($query->fetch()) {
        $message = 'Un utlisateur existe déjà avec cette adresse email';
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }

    $plainPassword = $_POST['newpassword'];
    $hashedPassword = password_hash($plainPassword, PASSWORD_DEFAULT);

    $query = $pdo->prepare('
        INSERT INTO users(firstname, lastname, email, password)
        VALUES(:firstname, :lastname, :mail, :password)
    ');
    $query->execute([
        'firstname' => $_POST['newfirstname'],
        'lastname' => $_POST['newlastname'],
        'mail' => $_POST['newmail'],
        'password' => $hashedPassword,
    ]);

    header('Location: /connexion.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Inscription</title>
</head>
<body>
<a class="btn btn-primary m-2" href="index.php"><h4>Retour à l'accueil</h4></a>

<div class="container">
    <form class="w-75 mx-auto" method="POST" action="">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Entrez votre Mail : </label>
        <input type="email" name="newmail" placeholder="Adresse mail" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Entrez votre Mot de passe : </label>
        <input type="password" name="newpassword" placeholder="Mot de passe" required class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Entrez votre Prénom : </label>
        <input type="password" name="newfirstname" placeholder="Prénom" required class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Entrez votre Nom : </label>
        <input type="password" name="newlastname" placeholder="Nom" required class="form-control" id="exampleInputPassword1">
      </div>
      <input type="submit" value="S'inscrire" class="btn btn-primary">
    </form>
</div>
</body>
</html>