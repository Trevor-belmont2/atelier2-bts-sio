<?php
require_once(__DIR__ . '/../model/personnelModel.php');

if (!isset($_GET['action'])) {
    header('Location: index.php?action=list');
    exit;
}

$action = $_GET['action'];

switch ($action) {
    case 'list':
        $personnels = getAllPersonnels();
        require_once(__DIR__ . '/../view/personnelList.php');
        break;

    case 'addForm':
        require_once(__DIR__ . '/../view/ajouterPersonnel.php');
        break;

    case 'add':
        $nom       = isset($_POST['nom']) ? trim($_POST['nom']) : '';
        $prenom    = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
        $idService = isset($_POST['idService']) ? (int)$_POST['idService'] : 0;

        if ($nom !== '' && $prenom !== '' && $idService > 0) {
            ajouterPersonnel($nom, $prenom, $idService);
            header('Location: index.php?action=list');
            exit;
        } else {
            header('Location: index.php?action=addForm');
            exit;
        }
        break;

    case 'editForm':
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $personnel = getPersonnelById($id);
        if ($personnel !== false) {
            require_once(__DIR__ . '/../view/modifierPersonnel.php');
        } else {
            header('Location: index.php?action=list');
        }
        break;

    case 'edit':
        $id        = isset($_POST['idPersonnel']) ? (int)$_POST['idPersonnel'] : 0;
        $nom       = isset($_POST['nom']) ? trim($_POST['nom']) : '';
        $prenom    = isset($_POST['prenom']) ? trim($_POST['prenom']) : '';
        $idService = isset($_POST['idService']) ? (int)$_POST['idService'] : 0;

        if ($id > 0 && $nom !== '' && $prenom !== '' && $idService > 0) {
            modifierPersonnel($id, $nom, $prenom, $idService);
        }
        header('Location: index.php?action=list');
        exit;
        break;

    case 'delete':
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        if ($id > 0) {
            supprimerPersonnel($id);
        }
        header('Location: index.php?action=list');
        exit;
        break;

    default:
        header('Location: index.php?action=list');
        exit;
}
