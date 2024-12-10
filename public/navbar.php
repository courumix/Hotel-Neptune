<<<<<<< Updated upstream
<?php
    include __DIR__. '/session.php';
?>

<nav>
    <?php if(!$isLoggedIn) {}
        ?>
        <li class="nav-item">
            <a href="nav-link" href="/public/login.php">Connexion</a>
        </li>
        <li class="nav-item">
            <a href="/public/register.php" class="nav-link">Inscript</a>
        </li>
    
    <?php else {?>
        <li class="nav-item">
            <a href="" class="nav-link"></a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link"></a>
        </li>
    <?php} 
    ?>
=======
<h?php

require_once __DIR__ . '/session.php';

?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel Neptune</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
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
>>>>>>> Stashed changes
</nav>