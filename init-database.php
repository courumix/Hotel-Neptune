<?php

require_once __DIR__ . '/database.php';

$sql = '
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
