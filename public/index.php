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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel Neptune</title>
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    <h1>Hello <?php echo 'World'; ?></h1>
    <a href="connexion.php"><h1>connexion</h1></a>
    <a href="inscription.php"><h1>inscription</h1></a>
