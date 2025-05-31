<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste du personnel</title>
    <style>
        table { border-collapse: collapse; width: 80%; }
        table, th, td { border: 1px solid #888; padding: 6px; }
        th { background: #ddd; }
        a.button { padding: 4px 8px; background: #eef; border: 1px solid #99c; text-decoration: none; }
    </style>
</head>
<body>
    <h1>Liste du personnel</h1>
    <p><a href="index.php?action=addForm" class="button">Ajouter un personnel</a></p>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>ID Service</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($personnels)): ?>
                <?php foreach ($personnels as $p): ?>
                    <tr>
                        <td><?= htmlspecialchars($p['idPersonnel']) ?></td>
                        <td><?= htmlspecialchars($p['nom']) ?></td>
                        <td><?= htmlspecialchars($p['prenom']) ?></td>
                        <td><?= htmlspecialchars($p['idService']) ?></td>
                        <td>
                            <a href="index.php?action=editForm&id=<?= $p['idPersonnel'] ?>">Modifier</a> |
                            <a href="index.php?action=delete&id=<?= $p['idPersonnel'] ?>"
                               onclick="return confirm('Supprimer <?= htmlspecialchars($p['nom']) ?> ?');">
                               Supprimer
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr><td colspan="5">Aucun personnel trouvé.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
