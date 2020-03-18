<?php


//Retourne une connexion à la base de donnée

function getPdo(){
    $pdo = new PDO('mysql:host=localhost;dbname=hugod_magellan;charset=utf8', 'hugod', 'g0fPxO9xySnVnQ==', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    return $pdo;
}
