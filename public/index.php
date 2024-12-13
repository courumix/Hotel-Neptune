<?php
require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/session.php';

// Fetch hotel details or user session information if needed
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Visiteur';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hôtel Neptune - Votre Séjour de Rêve</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="/Photo/Hotel-Neptune-logo.jpg">
    <style>
        .carousel-caption {
            background-color: rgba(0,0,0,0.5);
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>


    <div class="container-fluid p-0">
        <div id="hotelCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="https://www.yonder.fr/sites/default/files/styles/lg-insert/public/contenu/destinations/hotel%20richer%20de%20belleval%202%C2%A9%20jerome%20mondiere.jpg?itok=pIlrrovQ" class="d-block w-100" alt="Chambre Luxueuse">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Chambres Élégantes</h5>
                        <p>Découvrez le confort et le raffinement de nos suites</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="https://cdn.generationvoyage.fr/2021/08/hotel-montpellier7.jpeg" class="d-block w-100" alt="Espace Commun">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Espaces Communs Modernes</h5>
                        <p>Des espaces conçus pour votre bien-être et votre détente</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://hapi.mmcreation.com/hapidam/c683f04e-8125-46c1-9713-21045cdf175f/hotel-raphael-rooftop-022.jpg?size=lg" class="d-block w-100" alt="Terrasse Panoramique">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Terrasse Panoramique</h5>
                        <p>Profitez d'une vue imprenable sur la ville</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#hotelCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Précédent</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#hotelCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Suivant</span>
            </button>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-md-8 offset-md-2 text-center">
                    <h1 class="mb-4">Bienvenue à l'Hôtel Neptune</h1>
                    <p class="lead">
                        Découvrez un havre de paix où le confort, l'élégance et l'hospitalité se rejoignent. 
                        Chaque détail a été pensé pour rendre votre séjour inoubliable.
                    </p>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Nos Chambres</h5>
                            <p class="card-text">Des chambres spacieuses et modernes, adaptées à tous vos besoins.</p>
                            <a href="chambredisponible.php" class="btn btn-primary">Voir les chambres</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Réservation</h5>
                            <p class="card-text">Réservez votre séjour en quelques clics et bénéficiez de nos meilleurs tarifs.</p>
                            <a href="reservation.php" class="btn btn-success">Réserver maintenant</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Services</h5>
                            <p class="card-text">Découvrez nos services haut de gamme pour un séjour parfait.</p>
                            <a href="services.php" class="btn btn-info">Nos services</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Hôtel Neptune. Tous droits réservés.</p>
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
        </svg>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
