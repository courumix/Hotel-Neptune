<?php

require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/session.php';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chambres Disponibles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <?php include __DIR__ . '/navbar.php'; ?>
    
    <div class="container py-4">
        <h2 class="text-center mb-4">Nos Chambres Disponibles</h2>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.yonder.fr/sites/default/files/styles/lg-insert/public/contenu/destinations/hotel%20richer%20de%20belleval%202%C2%A9%20jerome%20mondiere.jpg?itok=pIlrrovQ" class="card-img-top" alt="Chambre Premium">
                    <div class="card-body">
                        <h5 class="card-title">Chambre Premium</h5>
                        <p class="card-text">Luxe et confort dans un espace élégant. Équipements haut de gamme pour un séjour inoubliable.</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="https://static-otelico.com/cache/regina_berck/hotel_regina-berck_sur_mer-chambre_standard_6.jpg" class="card-img-top" alt="Chambre Standard">
                    <div class="card-body">
                        <h5 class="card-title">Chambre Standard</h5>
                        <p class="card-text">Simplicité et fonctionnalité. Parfaite pour un voyage d'affaires ou un court séjour.</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.mews.com/hs-fs/hubfs/type%20de%20chambre%20par%20agencement.webp?width=800&height=600&name=type%20de%20chambre%20par%20agencement.webp" class="card-img-top" alt="Chambre Design">
                    <div class="card-body">
                        <h5 class="card-title">Chambre Design</h5>
                        <p class="card-text">Espace moderne avec aménagement contemporain. Idéal pour les amateurs de style et de sophistication.</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.hoteldefrance-paris.fr/cache/img/1956b1562896f1b006a01221b84eaa7e6a30df55-1956b1-3840-2160-auto.jpg" class="card-img-top" alt="Chambre Supérieure">
                    <div class="card-body">
                        <h5 class="card-title">Chambre Supérieure</h5>
                        <p class="card-text">Un espace plus grand avec des détails raffinés. Confort supérieur et prestations de qualité.</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.hoteldesprinces.com/wp-content/uploads/2024/05/20240530_160716-scaled.jpg" class="card-img-top" alt="Chambre Familiale">
                    <div class="card-body">
                        <h5 class="card-title">Chambre Familiale</h5>
                        <p class="card-text">Spacieuse et confortable. 2 lits doubles et 2 lits superposés avec vue panoramique sur la rue de Boigne et le château des Ducs de Savoie.</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="https://static-otelico.com/cache/lacouronne/hotel_marmande_la_couronne_9_2.jpg" class="card-img-top" alt="Chambre Familiale Grand Format">
                    <div class="card-body">
                        <h5 class="card-title">Chambre Familiale Large <small class="text-muted">À partir de 110,00 €</small></h5>
                        <p class="card-text">Espace modulable pour familles et groupes :
                        <br>• 3 personnes : dès 90€
                        <br>• 4 personnes : dès 110€
                        <br>• 5 personnes : dès 120€
                        <br>Petit-déjeuner inclus (9.80€/personne)</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="https://hotel-montbriand-antony.com/wp-content/uploads/2020/07/chambre-familiale.jpg" class="card-img-top" alt="Chambre Familiale Équipée">
                    <div class="card-body">
                        <h5 class="card-title">Chambre Familiale Confort</h5>
                        <p class="card-text">Équipements complets sur 35m² :
                        <br>• Lit double 160×190 
                        <br>• Canapé-lit pour enfants
                        <br>• Climatisation
                        <br>• Wifi gratuit
                        <br>• Animaux acceptés (+15€/jour)</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100">
                    <img src="https://www.hotelmistralcomedie.com/public/img/big/CHAMBREFAMILIAL10jpeg_620e64ba75304.jpeg" class="card-img-top" alt="Chambre Familiale Montpellier">
                    <div class="card-body">
                        <h5 class="card-title">Chambre Familiale Montpellier</h5>
                        <p class="card-text">Conçue pour 2 adultes et 2 enfants :
                        <br>• Surface de 18,5 m²
                        <br>• Lit double (160x200)
                        <br>• Lit superposé
                        <br>• Balcon avec vue sur rue
                        <br>• WiFi et TV inclus</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>