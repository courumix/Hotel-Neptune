<?php
require_once __DIR__. '/../database.php';
require_once __DIR__. '/session.php';
require_once __DIR__. '/RoomManager.php';
require_once __DIR__. '/ReservationManager.php';

// Redirect if not logged in
if (!$isLoggedIn) {
    header('Location: /login.php');
    exit;
}

$roomManager = new RoomManager($pdo);
$reservationManager = new ReservationManager($pdo, $roomManager);

$errorMessage = '';
$successMessage = '';

// Get room details
$roomId = $_GET['room_id'] ?? null;
if (!$roomId) {
    header('Location: /');
    exit;
}

$rooms = $roomManager->getAvailableRooms(['room_id' => $roomId]);
$room = $rooms[0] ?? null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        $reservationManager->createReservation(
            $_SESSION['user']['id'],
            $roomId,
            $_POST['check_in'],
            $_POST['check_out']
        );
        
        $successMessage = 'Réservation confirmée avec succès !';
    } catch (Exception $e) {
        $errorMessage = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Réservation - Hotel Neptune</title>
</head>
<body>
    <?php include __DIR__. '/navbar.php' ?>
    
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Réservation de Chambre</h2>
                    </div>
                    <div class="card-body">
                        <?php if ($errorMessage): ?>
                            <div class="alert alert-danger"><?= htmlspecialchars($errorMessage) ?></div>
                        <?php endif; ?>
                        
                        <?php if ($successMessage): ?>
                            <div class="alert alert-success"><?= htmlspecialchars($successMessage) ?></div>
                        <?php endif; ?>
                        
                        <?php if ($room): ?>
                            <div class="mb-4">
                                <h3><?= htmlspecialchars($room['type']) ?> - Chambre <?= htmlspecialchars($room['room_number']) ?></h3>
                                <p><?= htmlspecialchars($room['description']) ?></p>
                                <p>Capacité : <?= htmlspecialchars($room['capacity']) ?> personnes</p>
                                <p>Prix par nuit : <?= number_format($room['price_per_night'], 2) ?> €</p>
                            </div>
                            
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="check_in" class="form-label">Date d'arrivée</label>
                                        <input type="date" class="form-control" id="check_in" name="check_in" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="check_out" class="form-label">Date de départ</label>
                                        <input type="date" class="form-control" id=check_in name="check_in" required>
                                    </div>
                                </div>