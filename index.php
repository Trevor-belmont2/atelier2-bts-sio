<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

if (!isset($_GET['action'])) {
    header('Location: index.php?action=list');
    exit;
}

require_once(__DIR__ . '/controller/personnelController.php');
