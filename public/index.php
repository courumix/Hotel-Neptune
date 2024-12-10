<?php

require_once __DIR__. '/../database.php';
require_once __DIR__. '/session.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Hotel Neptune</title>
</head>
<body>
    <?php include __DIR__. '/navbar.php' ?>
    <h1>Hotel Neptune</h1>
    <?php echo $isLoggedIn ? 'Je suis connecter' : 'Je suis pas connecter'; ?>
    <img src="https://hapi.mmcreation.com/hapidam/4441d8ee-41d6-4bb8-93ac-a5834b6bd111/Facade_2_by_Night_-_CHotel_Raphael_Paris.jpg.jpg?size=lg" alt="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

