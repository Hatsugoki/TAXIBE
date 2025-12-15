<h2>Modifier les paramètres de salaire</h2>

<form method="post" action="/salary/store">
    <input type="number" step="0.01" name="min" placeholder="Pourcent minimum" required>
    <input type="number" step="0.01" name="max" placeholder="Pourcent maximum" required>
    <button>Enregistrer</button>
</form>

<h3>Historique des paramètres</h3>
<ul>
    <?php foreach ($params as $p): ?>
        <li><?= $p['date_application'] ?> : <?= $p['pourcent_min'] ?>% / <?= $p['pourcent_max'] ?>%</li>
    <?php endforeach; ?>
</ul>
