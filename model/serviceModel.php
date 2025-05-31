<?php
require_once __DIR__ . '/../includes/config.php';

function getAllServices() {
    global $pdo;
    $sql = "SELECT * FROM service";
    return $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
}
?>
