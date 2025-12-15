<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Taxibe – Gestion</title>
    <style>
        body { font-family: Arial; background:#f4f6f8; }
        .box {
            width: 600px;
            margin: 60px auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,.1);
        }
        a {
            display: block;
            padding: 10px;
            margin: 8px 0;
            background: #2c7be5;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            text-align: center;
        }
        a:hover { background: #1a68d1; }
    </style>
</head>
<body>

<div class="box">
    <h2> Application Taxibe</h2>
    <p>Gestion des trajets, véhicules et chauffeurs</p>

    <a href="/trajets">Liste des trajets par jour</a>
    <a href="/trajets/top">Les trajets les plus rentables par jour</a>
    <a href="/trajets/new"> Enregistrer un trajet</a>

    <hr>
    <a href="/vehicules/available">Véhicules disponibles par date</a>
    <a href="/vehicules/pannes">Taux de panne mensuel par véhicule </a>

    <hr>
    <a href="/salaire">Liste des salaires journaliers</a>
    <a href="/salaire/form">Modifier les paramètres de salaire</a>

</div>

</body>
</html>
