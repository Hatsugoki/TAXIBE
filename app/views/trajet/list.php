<h2>Trajets du <?= htmlspecialchars($date) ?></h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Chauffeur</th>
        <th>Véhicule</th>
        <th>KM</th>
        <th>Recette</th>
        <th>Carburant</th>
        <th>Bénéfice</th>
    </tr>

    <?php foreach ($trajets as $t): ?>
    <tr>
        <td><?= $t['chauffeur'] ?></td>
        <td><?= $t['immatriculation'] ?></td>
        <td><?= $t['km_effectue'] ?></td>
        <td><?= $t['total_recette'] ?></td>
        <td><?= $t['total_carburant'] ?></td>
        <td><?= $t['total_recette'] - $t['total_carburant'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
