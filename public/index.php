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
<<<<<<< Updated upstream

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
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
=======
    <div class="titre">
     <h1>HELLO WORLD</h1>
     </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<style>
 *{
    background-image: url(https://hapi.mmcreation.com/hapidam/4441d8ee-41d6-4bb8-93ac-a5834b6bd111/Facade_2_by_Night_-_CHotel_Raphael_Paris.jpg.jpg?size=lg);
 }

 .titre{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    
}
</style>
>>>>>>> Stashed changes
