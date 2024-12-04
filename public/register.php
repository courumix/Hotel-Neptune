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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php include __DIR__. '/navbar.php' ?>
    <div class="container">
        <div class="card  border-light mb-3" style="max-width: 18rem;">
            <form action="" method="post">
                <input type="text" name="firstname" placeholder="Nom" required>
                <input type="text" name="lastname" placeholder="Prénom" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Mot de Passe" required>
                <input type="submit" value="s'inscrire" class="btn btn-primary">
            </form>
        </div>
    </div>
    <div class="card>
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

</body>
</html>