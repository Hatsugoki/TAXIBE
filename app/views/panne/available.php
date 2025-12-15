<h2>Véhicules disponibles le <?= $date ?></h2>

<form method="get" action="/vehicules/available">
    <input type="date" name="date" value="<?= $date ?>">
    <button>Filtrer</button>
</form>

<table border="1" cellpadding="6">
    <tr>
        <th>ID</th>
        <th>Immatriculation</th>
        <th>Modèle</th>
    </tr>

    <?php foreach ($vehicles as $v): ?>
    <tr>
        <td><?= $v['id'] ?></td>
        <td><?= $v['immatriculation'] ?></td>
        <td><?= $v['modele'] ?></td>
    </tr>
    <?php endforeach; ?>
</table>
