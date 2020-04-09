<?php

// VALABLE POUR N'IMPORTE QUELLE REQUETE SQL
// CREATE
// READ
// UPDATE
// DELETE

// ETAPE1: CONNECTER PHP A SQL
$pdo = new PDO("mysql:host=localhost;dbname=ilesfantastiques;charset=utf8;", "root", "");

// ETAPE2a: ON ENVOIE LA REQUETE PREPAREE
// PDOStatement EST UN CONTAINER QUI ENGLOBE LES RESULTATS DE LA REQUETE SQL
<<<<<<< HEAD
$pdoStatement = $pdo->prepare($requeteSQL);
$pdoStatement->execute($tabAssoColonneValeur);

?>
=======
$pdoStatement = $pdo-> prepare($requeteSQL);
$pdoStatement ->execute($tabAssoColonneValeur);
>>>>>>> 656f48c385eedc9ed70f99372240a39d730dcb15

