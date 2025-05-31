<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=mediatek86;charset=utf8',
        'root',
        '', // Mot de passe WAMP souvent vide
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Erreur de connexion à la base de données : " . $e->getMessage());
}
?>
