<?php
    include __DIR__. '/../session.php';
?>

<nav>
    <?php if(!$isLoggedIn) {?>
        <li class="nav-item">
            <a href="nav-link" href="/public/login.php">Connexion</a>
        </li>
        <li class="nav-item">
            <a href="/public/register.php" class="nav-link">Inscript</a>
        </li>
    <?php} else {?>
        <li class="nav-item">
            <a href="" class="nav-link"></a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link"></a>
        </li>
    <?php}?>
</nav>