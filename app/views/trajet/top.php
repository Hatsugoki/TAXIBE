<div class="header">
            <h1>Taxibe Gestion</h1>
            <p>Plateforme de gestion des transports</p>
</div>

<link rel="stylesheet" href="/assets/css/css.css">

<h2>Trajets les plus rentables <?= $date ? "du $date" : "tous les jours" ?></h2>

<form method="get" action="/trajets/top">
    <select name="date">
        <option value="">Toutes les dates</option>
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
        <th>Départ</th>
        <th>Arrivée</th>
        <th>KM</th>
        <th>Recette</th>
        <th>Carburant</th>
        <th>Bénéfice</th>
    </tr>

    <?php foreach ($trajets as $t): ?>
    <tr>
        <td><?= $t['date_jour'] ?></td>
        <td><?= $t['chauffeur'] ?></td>
        <td><?= $t['immatriculation'] ?> (<?= $t['modele'] ?>)</td>
        <td><?= $t['point_depart'] ?></td>
        <td><?= $t['point_arrivee'] ?></td>
        <td><?= $t['distance_km'] ?></td>
        <td><?= $t['recette'] ?></td>
        <td><?= $t['carburant'] ?></td>
        <td><b><?= $t['benefice'] ?></b></td>
    </tr>
    <?php endforeach; ?>
</table>
