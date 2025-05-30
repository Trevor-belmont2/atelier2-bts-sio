<?php
// Fichier : model/database.php
// Connexion à la base de données MySQL via PDO

$host = 'localhost';          // hôte du serveur
$dbname = 'mediatek86';       // nom de ta base de données
$username = 'root';           // nom d’utilisateur MySQL
$password = '';               // mot de passe (vide par défaut sous Wamp)

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    // Activer les erreurs PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur de connexion : " . $e->getMessage());
}
?>
