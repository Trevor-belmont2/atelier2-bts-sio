<?php
// controller/ajouterPersonnelController.php
require_once(__DIR__ . '/../model/personnelModel.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom       = trim($_POST['nom'] ?? '');
    $prenom    = trim($_POST['prenom'] ?? '');
    $idService = trim($_POST['idService'] ?? '');

    if ($nom !== '' && $prenom !== '' && $idService !== '') {
        // Ajout en base
        ajouterPersonnel($nom, $prenom, $idService);
        // Redirection vers la liste (ACTION=list)
        header("Location: ../index.php?action=list");
        exit;
    } else {
        echo "<p style='color:red;'>Tous les champs sont obligatoires. <a href='../index.php?action=addForm'>Retour</a></p>";
        exit;
    }
} else {
    // Si on accède directement en GET, on redirige vers le formulaire d’ajout
    header("Location: ../index.php?action=addForm");
    exit;
}
?>
