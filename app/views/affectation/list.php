<link rel="stylesheet" href="/assets/css/css.css">

<h2>Liste des affectations</h2>

<table border="1" cellpadding="6">
    <tr>
        <th>Date</th>
        <th>Chauffeur</th>
        <th>Véhicule</th>
    </tr>

    <?php foreach ($affectations as $a): ?>
    <tr>
        <td><?= htmlspecialchars($a['date_jour']) ?></td>
        <td><?= htmlspecialchars($a['chauffeur']) ?></td>
        <td>
            <?= htmlspecialchars($a['immatriculation']) ?>
            — <?= htmlspecialchars($a['modele']) ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
