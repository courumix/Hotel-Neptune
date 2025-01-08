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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Hôtel Neptune - Chambres </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .room-card {
            transition: transform 0.2s;
            height: 100%;
        }
        .room-card:hover {
            transform: translateY(-5px);
        }
        .amenity-icon {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
        .service-icon {
            width: 48px;
            height: 48px;
            padding: 10px;
            background-color: #e3f2fd;
            border-radius: 50%;
            margin-bottom: 15px;
        }
        .price-badge {
            background-color: #0d6efd;
            color: white;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 0.9em;
        }
        .room-image {
            height: 200px;
            object-fit: cover;
        }
        .service-card {
            height: 100%;
            transition: transform 0.2s;
        }
        .service-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
  <?php include __DIR__ . '/navbar.php'; ?>
    <!-- Chambres Section -->
    <div class="container py-5">
        <h2 class="text-center mb-5">Nos Chambres</h2>
        <div class="row g-4">
            <!-- Chambre Premium -->
            <div class="col-md-6 col-lg-4">
                <div class="card room-card shadow-sm">
                    <img src="https://dq5r178u4t83b.cloudfront.net/wp-content/uploads/sites/181/2023/07/06125703/Premium-Room-1170x780.jpg" class="card-img-top room-image" alt="Chambre Premium">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="h5">Chambre Premium</h3>
                            <span class="price-badge">250€ / nuit</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <svg class="amenity-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="text-muted">Jusqu'à 2 personnes</span>
                        </div>
                        <p class="card-text">Une chambre luxueuse avec vue panoramique sur la mer, parfaite pour un séjour romantique.</p>
                        <div class="d-flex gap-3 mt-3">
                            <small class="text-muted d-flex align-items-center">
                                <svg class="amenity-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12" y2="20"></line></svg>
                                WiFi
                            </small>
                            <small class="text-muted d-flex align-items-center">
                                <svg class="amenity-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 20h6"></path><path d="M12 20v-4"></path><path d="M3 6h18v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V6z"></path></svg>
                                Spa privé
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambre Standard -->
            <div class="col-md-6 col-lg-4">
                <div class="card room-card shadow-sm">
                    <img src="https://static-otelico.com/cache/baulieu/cf1600/h800/vs30052020361-WEB.jpg" class="card-img-top room-image" alt="Chambre Standard">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="h5">Chambre Standard</h3>
                            <span class="price-badge">150€ / nuit</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <svg class="amenity-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="text-muted">Jusqu'à 2 personnes</span>
                        </div>
                        <p class="card-text">Chambre confortable et fonctionnelle, idéale pour les voyageurs d'affaires.</p>
                        <div class="d-flex gap-3 mt-3">
                            <small class="text-muted d-flex align-items-center">
                                <svg class="amenity-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12" y2="20"></line></svg>
                                WiFi
                            </small>
                            <small class="text-muted d-flex align-items-center">
                                <svg class="amenity-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                TV HD
                            </small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chambre Familiale -->
            <div class="col-md-6 col-lg-4">
                <div class="card room-card shadow-sm">
                    <img src="https://www.maison-obono.com/wp-content/uploads/chambre-familiale-manoir.jpg" class="card-img-top room-image" alt="Chambre Familiale">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h3 class="h5">Chambre Familiale</h3>
                            <span class="price-badge">300€ / nuit</span>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <svg class="amenity-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            <span class="text-muted">Jusqu'à 4 personnes</span>
                        </div>
                        <p class="card-text">Spacieuse chambre avec deux espaces séparés, parfaite pour les familles.</p>
                        <div class="d-flex gap-3 mt-3">
                            <small class="text-muted d-flex align-items-center">
                                <svg class="amenity-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12" y2="20"></line></svg>
                                WiFi
                            </small>
                            <small class="text-muted d-flex align-items-center">
                                <svg class="amenity-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 20h6"></path><path d="M12 20v-4"></path><path d="M3 6h18v8a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V6z"></path></svg>
                                2 Salles de bain
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 



    <!-- Contact Section -->
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h3 class="h4 mb-4">Besoin d'informations supplémentaires ?</h3>
                <p class="mb-4">Notre équipe est à votre disposition pour répondre à toutes vos questions</p>
                <a href="contact.php"><button class="btn btn-primary me-2">Contactez-nous</button></a>
                <a href="ajoutchambre.php"><button  class="btn btn-outline-primary">Réserver maintenant</button></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</body>

    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Hôtel Neptune. Tous droits réservés.</p>
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
            <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"/>
        </svg>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</html>