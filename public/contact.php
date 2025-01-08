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
    <title>Hôtel Neptune - Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .contact-icon {
            width: 40px;
            height: 40px;
            padding: 8px;
            background-color: #e3f2fd;
            border-radius: 50%;
            margin-right: 15px;
        }
        .contact-info {
            transition: transform 0.2s;
        }
        .contact-info:hover {
            transform: translateY(-5px);
        }
        .map-container {
            height: 400px;
            width: 100%;
        }
    </style>
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>

    <div class="container py-5">
        <h1 class="text-center mb-5">Contactez-nous</h1>
        
        <!-- Contact Information Cards -->
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 contact-info">
                    <div class="card-body d-flex align-items-start">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title">Téléphone</h5>
                            <p class="card-text">+33 (0)1 23 45 67 89</p>
                            <p class="card-text text-muted">Disponible 24h/24, 7j/7</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 contact-info">
                    <div class="card-body d-flex align-items-start">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title">Email</h5>
                            <p class="card-text">contact@hotel-neptune.fr</p>
                            <p class="card-text text-muted">Réponse sous 24h</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 contact-info">
                    <div class="card-body d-flex align-items-start">
                        <div class="contact-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <div>
                            <h5 class="card-title">Adresse</h5>
                            <p class="card-text">123 Avenue de la Mer<br>75001 Paris, France</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form and Map -->
        <div class="row g-4">
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Envoyez-nous un message</h3>
                        <form action="process_contact.php" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nom complet *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="phone" class="form-label">Téléphone</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            
                            <div class="mb-3">
                                <label for="subject" class="form-label">Sujet *</label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="">Choisissez un sujet</option>
                                    <option value="reservation">Réservation</option>
                                    <option value="information">Demande d'information</option>
                                    <option value="reclamation">Réclamation</option>
                                    <option value="autre">Autre</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Envoyer le message</button>
                        </form>
                    </div>
                </div>
            </div>
            
            <!-- Map -->
            <div class="col-lg-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Notre emplacement</h3>
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9916256937595!2d2.292292615407461!3d48.858370079287466!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1647822854645!5m2!1sfr!2sfr" 
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="container py-5">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">Questions fréquentes</h3>
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                Quelles sont les heures d'arrivée et de départ ?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                L'arrivée se fait à partir de 15h et le départ est prévu avant 11h.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                Comment puis-je modifier ma réservation ?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Vous pouvez modifier votre réservation jusqu'à 48h avant votre arrivée en nous contactant par téléphone ou email.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include __DIR__ . '/footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>