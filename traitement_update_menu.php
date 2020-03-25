<?php

session_start();

require_once('Connexion.php');
require_once('database.php');
require_once('Menu.php');

//On créer une instance

$traitement = new Menu();

//On récupère les valeurs saisis et on vérifie que les variables ne sont pas nulles

$entree = null;
if (!empty($_POST['entree'])) {

    $entree = $_POST['entree'];
}

$plat = null;
if (!empty($_POST['plat'])) {

    $plat = $_POST['plat'];
}

$dessert = null;
if (!empty($_POST['dessert'])) {

    $dessert = $_POST['dessert'];
}

$date = null;
if (!empty($_POST['date'])) {

    $date = $_POST['date'];
}

   //On modifie les valeurs dans la base de données
$traitement->Update($entree, $plat, $dessert, $date);

header('Location: admin.php');
// //On affiche la nouvelle entrée
// echo "<h1> Menu modifié ! </h1>";

// echo "<h2> Menu du " . strftime("%A %d %B %G", strtotime($date)) . "</h2>";

// echo "<p> Entrée : " .$entree. "</p>";
// echo "<p> Plat : " .$plat. "</p>";
// echo "<p> Dessert : " .$dessert. "</p>";