<link rel="stylesheet" href="/assets/css/css.css">

<div class="header">
            <h1>Taxibe Gestion</h1>
            <p>Plateforme de gestion des transports</p>
</div>

<h2>Salaires journaliers des chauffeurs</h2>

<table border="1" cellpadding="6">
    <tr>
        <th>Date</th>
        <th>Chauffeur</th>
        <th>Total Recette</th>
        <th>Versement Minimum</th>
        <th>% Min</th>
        <th>% Max</th>
        <th>Salaire Calculé</th>
    </tr>

    <?php foreach ($salaries as $s): ?>
    <tr>
        <td><?= $s['date_jour'] ?></td>
        <td><?= $s['chauffeur'] ?></td>
        <td><?= number_format($s['total_recette'], 2) ?></td>
        <td><?= number_format($s['versement_minimum'], 2) ?></td>
        <td><?= $s['pourcent_min'] ?>%</td>
        <td><?= $s['pourcent_max'] ?>%</td>
        <td><?= number_format($s['salaire'], 2) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
