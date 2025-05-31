<?php
// controller/modifierPersonnelController.php
require_once(__DIR__ . '/../model/personnelModel.php');

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id        = trim($_POST['idPersonnel'] ?? '');
    $nom       = trim($_POST['nom'] ?? '');
    $prenom    = trim($_POST['prenom'] ?? '');
    $idService = trim($_POST['idService'] ?? '');

    if ($id !== '' && $nom !== '' && $prenom !== '' && $idService !== '') {
        modifierPersonnel($id, $nom, $prenom, $idService);
        header("Location: ../index.php?action=list");
        exit;
    } else {
        echo "<p style='color:red;'>Tous les champs sont obligatoires. <a href='../index.php?action=editForm&id={$id}'>Retour</a></p>";
        exit;
    }
} else {
    // Si on accède directement en GET, on retourne à la liste
    header("Location: ../index.php?action=list");
    exit;
}
?>
