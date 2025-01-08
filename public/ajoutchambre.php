<?php
require_once __DIR__ . '/../database.php';
require_once __DIR__ . '/session.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['etage'])
    || !isset($_POST['numero']) 
    || !isset($_POST['capacite']) 
    || !isset($_POST['type'])
    || !isset($_POST['prix']))
    {
        $message = 'il manque des informations.';
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }

    if (empty($_POST['etage'])
    || empty($_POST['numero']) 
    || empty($_POST['capacite']) 
    || empty($_POST['type'])
    || empty($_POST['prix']))
    {
        $message = 'Tout les champs ne sont pas remplies';
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }

    $query = $pdo->prepare('SELECT * FROM chambre WHERE chambre.numero_chambre = :numero');
    $query->execute(['numero' => $_POST['numero']]);

    if ($query->fetch()) {
        $message = 'Une chambre existe déjà avec ce numéro';
        header('Location: /error.php?message=' . urlencode($message));
        exit;
    }

    $query = $pdo->prepare('
        INSERT INTO chambre(etage_chambre, numero_chambre, capacite_chambre, type_chambre, prix_chambre)
        VALUES(:etage, :numero, :capacite, :type, :prix)
    ');
    $query->execute([
        'etage' => $_POST['etage'],
        'numero' => $_POST['numero'],
        'capacite' => $_POST['capacite'],
        'type' => $_POST['type'],
        'prix' => $_POST['prix']
    ]);

    header('Location: /index.php');
    exit;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/Photo/Hotel-Neptune-logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Création de chambres</title>
</head>
<body>
<?php include __DIR__ . '/navbar.php'; ?>

<div class="container">
    <form class="w-75 mx-auto" method="POST" action="">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Entrez l'étage de la chambre : </label>
      <select name="etage" required class="form-select form-select-sm" aria-label="Small select example">
      <option selected>Etage de la chambre</option>
      <option value="1">1er étage</option>
      <option value="2">2nd étage</option>
      <option value="3">3ème étage</option>
      <option value="4">4ème étage</option>
      <option value="5">5ème étage</option>
      </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Entrez le numéro de la chambre : </label>
        <input type="text" name="numero" placeholder="Numéro de chambre" required class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Entrez la capacité de la chambre : </label>
        <select name="capacite" required class="form-select form-select-sm" aria-label="Small select example">
        <option selected>Capacité de la chambre</option>
        <option value="1">une personne</option>
        <option value="2">2 personnes</option>
        <option value="3">3 personnes</option>
        <option value="4">4 personnes</option>
        <option value="5">5 personnes</option>
        <option value="6">6 personnes</option>
        <option value="7">7 personnes</option>
        <option value="8">8 personnes</option>
        <option value="9">9 personnes</option>
        <option value="10">10 personnes</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Entrez le type de la chambre : </label>
        <select name="type" required class="form-select form-select-sm" aria-label="Small select example">
        <option selected>Type de la chambre</option>
        <option value="Famillial">Famillial</option>
        <option value="Premium">Premium</option>
        <option value="Simple">Simple</option>
        <option value="Suite">Suite</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Entrez le prix de la chambre : </label>
        <input type="text" name="prix" placeholder="Prix" required class="form-control" id="exampleInputPassword1">
      </div>
      <input type="submit" value="Ajouter une chambre" class="btn btn-primary">
    </form>
</div>
</body>
</html>