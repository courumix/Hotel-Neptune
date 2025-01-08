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
    <div class="container mt-5">
        <h1 class="text-center">Réservez votre chambre</h1>
        
        <!-- Affichage des messages -->
        <?php if (!empty($message)) echo $message; ?>

        <!-- Formulaire de réservation -->
        <form action="" method="POST" class="mt-4">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom complet :</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Adresse email :</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <div class="mb-3">
                <label for="type_chambre" class="form-label">Type de chambre :</label>
                <select class="form-select" id="type_chambre" name="type_chambre" required>
                    <option value="1">Familiale</option>
                    <option value="2">Premium</option>
                    <option value="3">Simple</option>
                    <option value="Suite">Suite</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="date_arrivee" class="form-label">Date d'arrivée :</label>
                <input type="date" class="form-control" id="date_arrivee" name="date_arrivee" required>
            </div>
            
            <div class="mb-3">
                <label for="date_depart" class="form-label">Date de départ :</label>
                <input type="date" class="form-control" id="date_depart" name="date_depart" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Réserver</button>
        </form>
    </div>

    <!-- Lien vers les scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
