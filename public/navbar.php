<h?php

require_once __DIR__ . '/session.php';

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
      <img src="/public/Photo/Hôtel-Neptune-logo.jpg" alt="Logo Hôtel Neptune" class="logo me-3 rounded" style="height: 50px;">  
      <h1>Hôtel Neptune</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if($isLoggedIn){
          if($_SESSION['user']['admin'] == 1){
            ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="ajoutchambre.php">création de chambres</a>
        </li>
        <?php }} ?>
        <li class="nav-item">
          <a class="nav-link" href="listechambre.php">Liste des chambres</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <?php if(!$isLoggedIn){ ?>
      <a href="connexion.php"><button type="button" class="btn btn-primary btn-sm me-2">Connexion</button></a>
      <a href="inscription.php"><button type="button" class="btn btn-secondary btn-sm">Inscription</button></a>
      <?php } else { ?>
      <div>
        <h3><span class="badge text-bg-primary">
        <?php echo $_SESSION['user']['firstname'] . ' ' . $_SESSION['user']['lastname']; ?>
      </span></h3>
      <a href="déconnexion.php"><button type="button" class="btn btn-danger">Deconnexion</button></a>
      </div>
      <?php } ?>
    </div>
  </div>
</nav>