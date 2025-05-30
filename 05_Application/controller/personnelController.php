<?php
// Fichier : controller/personnelController.php

// Inclusion de la connexion à la BDD
require_once(__DIR__ . '/../model/database.php');

// Requête SQL pour récupérer tous les personnels
$sql = "SELECT * FROM personnel";
$stmt = $pdo->query($sql);
$personnels = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Appel de la vue pour afficher les données
require_once(__DIR__ . '/../view/personnelList.php');
?>
