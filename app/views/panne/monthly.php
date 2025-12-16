<link rel="stylesheet" href="/assets/css/css.css">

<div class="header">
            <h1>Taxibe Gestion</h1>
            <p>Plateforme de gestion des transports</p>
</div>


<h2>Taux de panne – <?= $month ?>/<?= $year ?></h2>

<form method="get" action="/vehicules/pannes">
    <input type="number" name="year" value="<?= $year ?>" min="2000" max="2100">
    <input type="number" name="month" value="<?= $month ?>" min="1" max="12">
    <button>Filtrer</button>
</form>

<table border="1" cellpadding="6">
    <tr>
        <th>ID</th>
        <th>Immatriculation</th>
        <th>Modèle</th>
        <th>Jours en panne</th>
        <th>Taux de panne (%)</th>
    </tr>

    <?php foreach ($data as $d): ?>
    <tr>
        <td><?= $d['id'] ?></td>
        <td><?= $d['immatriculation'] ?></td>
        <td><?= $d['modele'] ?></td>
        <td><?= $d['jours_panne'] ?></td>
        <td><?= $d['taux_panne'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
