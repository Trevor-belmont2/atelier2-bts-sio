<?php
require_once(__DIR__ . '/../includes/config.php');

function getAllPersonnels() {
    global $pdo;
    $sql  = "SELECT * FROM `personnel`";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function ajouterPersonnel($nom, $prenom, $idService) {
    global $pdo;
    $sql  = "INSERT INTO `personnel` (`nom`, `prenom`, `idService`) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $prenom, $idService]);
}

function modifierPersonnel($id, $nom, $prenom, $idService) {
    global $pdo;
    $sql  = "UPDATE `personnel`
             SET `nom` = ?, `prenom` = ?, `idService` = ?
             WHERE `idPersonnel` = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $prenom, $idService, $id]);
}

function supprimerPersonnel($id) {
    global $pdo;
    $sql  = "DELETE FROM `personnel` WHERE `idPersonnel` = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
}

function getPersonnelById($id) {
    global $pdo;
    $sql  = "SELECT * FROM `personnel` WHERE `idPersonnel` = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
