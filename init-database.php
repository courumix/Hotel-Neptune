<?php

require_once __DIR__ . '/database.php';

$sql = '
    CREATE TABLE IF NOT EXISTS `reservation` (
        `id_reservation` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        `dateD_reservation` DATE NOT NULL,
        `dateF_reservation` DATE NOT NULL,
        `id_users` INT NOT NULL,
        `id_chambre` DECIMAL NOT NULL,
        FOREIGN KEY(id_users) REFERENCES users(id_users),
        FOREIGN KEY(id_chambre) REFERENCES chambre(id_chambre)
    );
    ALTER TABLE `reservation` ADD FOREIGN KEY `id_users` REFERENCES `users.users`
';

$pdo->query($sql);

?>