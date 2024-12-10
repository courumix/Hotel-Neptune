<?php

<<<<<<< HEAD
require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/session.php';


?>
=======
require_once __DIR__. '/../database.php';
require_once __DIR__. '/../session.php';

?>

>>>>>>> 8584277e0d5c897b2f7571c85ca13b32369a9930
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel Neptune</title>
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    <h1>Hello <?php echo 'World'; ?></h1>
    <a href="connexion.php"><h1>connexion</h1></a>
    <a href="inscription.php"><h1>inscription</h1></a>
    <?php echo $isLoggedIn ? 'Je suis connecté' : 'Je ne suis pas connecté'; ?>
=======
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel Neptune</title>
</head>
<body>
    <?php include __DIR__. '/../navbar.php' ?>
    <h1>Hello</h1>
    <?php echo $isLoggedIn ? 'Je suis connecter' : 'Je suis pas connecter'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
>>>>>>> 8584277e0d5c897b2f7571c85ca13b32369a9930
</body>
</html>