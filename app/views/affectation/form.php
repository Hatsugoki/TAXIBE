
<link rel="stylesheet" href="/assets/css/css.css">

<body>
    <h2>Affectation chauffeur / véhicule</h2>

<form method="post" action="/affectations">

    <label>Chauffeur</label><br>
    <select name="id_chauffeur" required>
        <option value="">-- Choisir un chauffeur --</option>
        <?php foreach ($chauffeurs as $c): ?>
            <option value="<?= $c['id'] ?>">
                <?= htmlspecialchars($c['nom']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label>Véhicule</label><br>
    <select name="id_vehicule" required>
        <option value="">-- Choisir un véhicule --</option>
        <?php foreach ($vehicules as $v): ?>
            <option value="<?= $v['id'] ?>">
                <?= $v['immatriculation'] ?> — <?= $v['modele'] ?>
            </option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <label>Date</label><br>
    <input type="date" name="date_jour" required>

    <br><br>

    <button>Affecter</button>
</form>

</body>