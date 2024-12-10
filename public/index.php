<?php
require_once __DIR__. '/../database.php';
require_once __DIR__. '/session.php';
require_once __DIR__. '/RoomManager.php';

// Initialize Room Manager
$roomManager = new RoomManager($pdo);

// Handle room filtering
$filters = [];
if (isset($_GET['type']) && !empty($_GET['type'])) {
    $filters['type'] = $_GET['type'];
}
if (isset($_GET['capacity']) && !empty($_GET['capacity'])) {
    $filters['capacity'] = intval($_GET['capacity']);
}
if (isset($_GET['max_price']) && !empty($_GET['max_price'])) {
    $filters['max_price'] = floatval($_GET['max_price']);
}

// Get available rooms
$availableRooms = $roomManager->getAvailableRooms($filters);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Hotel Neptune - Accueil</title>
</head>
<body>
    <?php include __DIR__. '/navbar.php' ?>
    
    <div class="container mt-5">
        <h1 class="text-center mb-4">Bienvenue à l'Hôtel Neptune</h1>
        
        <!-- Room Filtering Form -->
        <div class="row mb-4">
            <div class="col-md-12">
                <form action="" method="get" class="row g-3">
                    <div class="col-md-3">
                        <select name="type" class="form-select">
                            <option value="">Type de chambre</option>
                            <option value="Familial">Familial</option>
                            <option value="Standard">Standard</option>
                            <option value="Suite">Suite</option>
                            <option value="Luxe">Luxe</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="capacity" class="form-control" placeholder="Capacité minimale">
                    </div>
                    <div class="col-md-3">
                        <input type="number" name="max_price" class="form-control" placeholder="Prix maximum par nuit">
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Filtrer</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Room Listings -->
        <div class="row">
            <?php foreach ($availableRooms as $room): ?>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($room['type']) ?> - Chambre <?= htmlspecialchars($room['room_number']) ?></h5>
                            <p class="card-text"><?= htmlspecialchars($room['description']) ?></p>
                            <p>Capacité : <?= htmlspecialchars($room['capacity']) ?> personnes</p>
                            <p>Prix par nuit : <?= number_format($room['price_per_night'], 2) ?> €</p>
                            <?php if ($isLoggedIn): ?>
                                <a href="/reservation.php?room_id=<?= $room['id'] ?>" class="btn btn-success">Réserver</a>
                            <?php else: ?>
                                <p class="text-danger">Connectez-vous pour réserver</p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>