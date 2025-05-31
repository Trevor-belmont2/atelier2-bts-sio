<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un personnel</title>
</head>
<body>
    <h1>Ajouter un personnel</h1>
    <form action="index.php?action=add" method="post">
        <label>Nom :
            <input type="text" name="nom" required>
        </label><br><br>
        <label>Prénom :
            <input type="text" name="prenom" required>
        </label><br><br>
        <label>ID Service :
            <input type="number" name="idService" min="1" required>
        </label><br><br>
        <button type="submit">Ajouter</button>
    </form>
    <p><a href="index.php?action=list">Retour</a></p>
</body>
</html>
