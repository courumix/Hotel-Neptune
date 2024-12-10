<?php

require_once __DIR__ . '/database.php';

$sql = '
<<<<<<< HEAD
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
=======
    CREATE TABLE IF NOT EXISTS `Users` (
        `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        `email` VARCHAR(225) NOT NULL,
        `password` VARCHAR(225) NOT NULL,
        `firstname` VARCHAR(40) NOT NULL,
        `lastname` VARCHAR(40) NOT NULL,
        `admin` BOOLEAN NOT NULL DEFAULT FALSE
    );

    CREATE TABLE IF NOT EXISTS `Rooms` (
        `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        `room_number` VARCHAR(225) NOT NULL,
        `type` VARCHAR(40) NOT NULL,
        `price` DECIMAL(10, 2) NOT NULL,
        `availability` BOOLEAN NOT NULL DEFAULT FALSE
    );

    CREATE TABLE IF NOT EXISTS `Reservations` (
        `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
        `user_id` INT NOT NULL,
        `room_id` INT NOT NULL,
        `check_in_date` DATE NOT NULL,
        `check_out_date` DATE NOT NULL,
        FOREIGN KEY (`user_id`) REFERENCES `Users`(`id`),
        FOREIGN KEY (`room_id`) REFERENCES `Rooms`(`id`)
    );
';

$pdo->exec($sql);
?>
>>>>>>> 8584277e0d5c897b2f7571c85ca13b32369a9930
