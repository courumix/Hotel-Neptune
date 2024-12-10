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
    <title>Inscription</title>
</head>
<body>
<form method="POST" action="">
        Entrez votre Mail : <input type="email" name="newmail" placeholder="Adresse mail" required>
        <br>
        Entrez votre Mot de passe : <input type="password" name="newpassword" placeholder="Mot de passe" required>
        <br>
        Entrez votre Prénom : <input type="text" name="newfirstname" placeholder="Prénom" required>
        <br>
        Entrez votre Nom : <input type="text" name="newlastname" placeholder="Nom" required>
        <br>
        <input type="submit" value="envoyer">
        </div>
    </form>
<a href="index.php"><h1>Retour à l'accueil</h1></a>
</body>
</html>