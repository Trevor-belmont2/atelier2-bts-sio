<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier un personnel</title>
</head>
<body>
    <h1>Modifier un personnel</h1>
    <?php
    if (!isset($personnel)) {
        echo '<p>Personnel introuvable.</p>';
        echo '<p><a href="index.php?action=list">← Retour</a></p>';
        exit;
    }
    ?>
    <form action="index.php?action=edit" method="post">
        <input type="hidden" name="idPersonnel" value="<?= htmlspecialchars($personnel['idPersonnel']) ?>">
        <label>Nom :
            <input type="text" name="nom" value="<?= htmlspecialchars($personnel['nom']) ?>" required>
        </label><br><br>
        <label>Prénom :
            <input type="text" name="prenom" value="<?= htmlspecialchars($personnel['prenom']) ?>" required>
        </label><br><br>
        <label>ID Service :
            <input type="number" name="idService"
                   value="<?= htmlspecialchars($personnel['idService']) ?>"
                   min="1" required>
        </label><br><br>
        <button type="submit">Modifier</button>
    </form>
    <p><a href="index.php?action=list">← Retour à la liste</a></p>
</body>
</html>
