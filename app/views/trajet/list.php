<link rel="stylesheet" href="/assets/css/css.css">
<div class="header">
            <h1>Taxibe Gestion</h1>
            <p>Plateforme de gestion des transports</p>
</div>


<h2>Trajets</h2>

<form method="get" action="/trajets">
    <select name="date">
        <option value="all"> Tous les jours</option>
        <?php foreach ($dates as $d): ?>
            <option value="<?= $d ?>" <?= ($date === $d) ? 'selected' : '' ?>>
                <?= $d ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Filtrer</button>
</form>

<br>

<table border="1" cellpadding="6">
    <tr>
        <th>Date</th>
        <th>Chauffeur</th>
        <th>Véhicule</th>
        <th>KM</th>
        <th>Recette</th>
        <th>Carburant</th>
        <th>Bénéfice</th>
    </tr>

    <?php foreach ($trajets as $t): ?>
    <tr>
        <td><?= $t['date_jour'] ?></td>
        <td><?= $t['chauffeur'] ?></td>
        <td><?= $t['immatriculation'] ?>(<?= $t['modele'] ?>)</td>
        <td><?= $t['km_effectue'] ?></td>
        <td><?= $t['total_recette'] ?></td>
        <td><?= $t['total_carburant'] ?></td>
        <td><b><?= $t['total_recette'] - $t['total_carburant'] ?></b></td>
    </tr>
    <?php endforeach; ?>
</table>
