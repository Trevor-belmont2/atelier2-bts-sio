<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste du personnel</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1 style="text-align: center;">Liste des personnels</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personnels as $personnel): ?>
                <tr>
                    <td><?= htmlspecialchars($personnel['idPersonnel']) ?></td>
                    <td><?= htmlspecialchars($personnel['nom']) ?></td>
                    <td><?= htmlspecialchars($personnel['prénom']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
