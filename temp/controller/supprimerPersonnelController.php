<?php
require_once 'model/personnelModel.php';
$id = $_GET['id'] ?? null;
if ($id !== null) {
    supprimerPersonnel($id);
}
header("Location: index.php");
exit();
?>

