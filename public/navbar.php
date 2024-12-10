<?php
    include __DIR__. '/session.php';
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
          <a class="nav-link active" aria-current="page" href="#">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">A propos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Chambre
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Familial</a></li>
            <li><a class="dropdown-item" href="#">Quelque chose</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<nav>
    <?php if(!$isLoggedIn) {?>
        <li class="nav-item">
            <a href="nav-link" href="/login.php">Connexion</a>
        </li>
        <li class="nav-item">
            <a href="/register.php" class="nav-link">Inscript</a>
        </li>
    <?php }else {?>
        <li class="nav-item">
            <a href="" class="nav-link"></a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link"></a>
        </li>
    <?php }?>
</nav>