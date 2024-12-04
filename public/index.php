<?php

require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/session.php';


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Hotel Neptune</title>
</head>
<body>
    <h1>Hello <?php echo 'World'; ?></h1>
    <a href="connexion.php"><h1>connexion</h1></a>
    <a href="inscription.php"><h1>inscription</h1></a>
    <?php echo $isLoggedIn ? 'Je suis connecté' : 'Je ne suis pas connecté'; ?>
</body>
</html>