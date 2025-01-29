<?php

require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/session.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UrbanTech - Comfort, fitness, and connection</title>
    <link rel="icon" href="/Photo/Hotel-Neptune-logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    
    <div class="container py-4">
        <h2 class="text-center mb-4">Our Products</h2>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://m.media-amazon.com/images/I/61X6F+4adNL.jpg" class="card-img-top" alt="Chambre Premium">
                    <div class="card-body">
                        <h5 class="card-title">Apple Watch</h5>
                        <p class="card-text">Experience the next generation of smart technology on your wrist.</p>
                        <a class="btn btn-primary" href="reservation.php" role="button">Buy Product</a>                    </div>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.apple.com/newsroom/images/2023/09/apple-unveils-apple-watch-ultra-2/article/Apple-Watch-Ultra-2-Trail-Loop-orange-beige-230912_inline.jpg.large.jpg" class="card-img-top" alt="Chambre Standard">
                    <div class="card-body">
                        <h5 class="card-title">SmartWatch Ultra</h5>
                        <p class="card-text">Stay ultra-connected with cutting-edge features and design.</p>
                        <a class="btn btn-primary" href="reservation.php" role="button">Buy Product</a>                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="https://m.media-amazon.com/images/I/41F-cy37dtL.jpg" class="card-img-top" alt="Chambre Design">
                    <div class="card-body">
                        <h5 class="card-title">SmartWatch SE</h5>
                        <p class="card-text">Professional-grade smartwatch for fitness, style, and more.</p>
                        <a class="btn btn-primary" href="reservation.php" role="button">Buy Product</a>                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

