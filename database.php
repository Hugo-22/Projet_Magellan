<?php


//Retourne une connexion à la base de donnée

function getPdo(){
    $pdo = new PDO('mysql:host=localhost;dbname=back-office-magellan;charset=utf8', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    return $pdo;
}
