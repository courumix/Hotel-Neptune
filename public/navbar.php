<?php
    include __DIR__. '/session.php';
?>
<nav>
    <div>
        <ul>
            <li>Hotel Neptune</li>
            <li>Accueil</li>
            <li>Chambre</li>
            <li>A propos</li>
            <li>Contact</li>
        </ul>
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