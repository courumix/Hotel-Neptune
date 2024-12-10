<?php

require_once __DIR__.'/../database.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(!isset($_POST['firstname'])
    || !isset($_POST['lastname'])
    || !isset($_POST['email'])
    || !isset($_POST['password'])
    ){
        $message='Il manque une information.';
        header('Location: /error.php?message= '. urlencode($message));
        exit;
    }
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(empty($_POST['firstname'])
    || empty($_POST['lastname'])
    || empty($_POST['email'])
    || empty($_POST['password'])
    ){
        $message='Tous les chamsp doivent être renseignés.';
        header('Location: /error.php?message= '. urlencode($message));
        exit;
    }
        
    $query = $pdo -> prepare('SELECT * FROM users WHERE users.email = :email');
    $query->execute(['email' => $_POST ['email']]);

    if($query->fetch()){
        $message='Il utilisateur exist déja cette addresse email.';
        header('Location: /error.php?message= '. urlencode($message));
        exit;
    }

    $plainPassword= $_POST ['password'];
    $hashedPassword= password_hash($plainPassword, PASSWORD_DEFAULT);

    $query = $pdo->prepare('INSERT INTO users(firstname, lastname, email, password)
    VALUES(:firstname ,:lastname, :email, :password)
    ');
    $query->execute([
        'firstname'=> $_POST['firstname'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <input type="text" name="firstname" placeholder="Nom" required>
            <input type="text" name="lastname" placeholder="Prénom" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mot de Passe" required>
            <input type="submit" value="s'inscrire">
        </form>
    </div>
</body>
</html>