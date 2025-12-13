<h2>Nouveau trajet</h2>

<form method="post" action="/trajets">
    <input type="number" name="affectation" placeholder="Affectation ID" required>
    <input type="number" name="trajet_type" placeholder="Trajet type ID" required>
    <input type="datetime-local" name="debut" required>
    <input type="datetime-local" name="fin" required>
    <input type="number" step="0.01" name="recette" placeholder="Recette" required>
    <input type="number" step="0.01" name="carburant" placeholder="Carburant" required>
    <button>Enregistrer</button>
</form>
