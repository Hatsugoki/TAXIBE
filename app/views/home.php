<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxibe – Gestion</title>
    <link rel="stylesheet" href="/assets/css/css.css">

</head>
<body>

<div class="container">
    <div class="dashboard">
        <div class="header">
            <h1>Taxibe Gestion</h1>
            <p>Plateforme de gestion des transports</p>
        </div>


        <div class="content">
            <div class="section">
                <div class="section-title">
                    <h2>Gestion des Trajets</h2>
                    <div class="line"></div>
                </div>
                <div class="menu-grid">
                    <div class="menu-card">
                        <h3>Liste des trajets par jour</h3>
                        <p>Consultez tous les trajets organisés par journée</p>
                        <a href="/trajets" class="btn">Accéder aux trajets</a>
                    </div>
                    
                    <div class="menu-card">
                        <h3>Trajets les plus rentables</h3>
                        <p>Analyse des trajets les plus profitables par jour</p>
                        <a href="/trajets/top" class="btn">Voir l'analyse</a>
                    </div>
                    
                    <div class="menu-card">
                        <h3>Enregistrer un trajet</h3>
                        <p>Enregistrez un nouveau trajet dans le système</p>
                        <a href="/trajets/new" class="btn">Ajouter un trajet</a>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-title">
                    <h2>Gestion des Véhicules</h2>
                    <div class="line"></div>
                </div>
                <div class="menu-grid">
                    <div class="menu-card">
                        <h3>Véhicules disponibles par date</h3>
                        <p>Vérifiez la disponibilité des véhicules</p>
                        <a href="/vehicules/available" class="btn">Consulter</a>
                    </div>
                    
                    <div class="menu-card">
                        <h3>Taux de panne mensuel</h3>
                        <p>Statistiques des pannes par véhicule</p>
                        <a href="/vehicules/pannes" class="btn">Voir les rapports</a>
                    </div>
                </div>
            </div>

            <div class="section">
                <div class="section-title">
                    <h2>Gestion des Salaires</h2>
                    <div class="line"></div>
                </div>
                <div class="menu-grid">
                    <div class="menu-card">
                        <h3>Salaires journaliers</h3>
                        <p>Liste des salaires calculés quotidiennement</p>
                        <a href="/salaire" class="btn">Voir les salaires</a>
                    </div>
                    
                    <div class="menu-card">
                        <h3>Paramètres de salaire</h3>
                        <p>Modifiez les paramètres de calcul des salaires</p>
                        <a href="/salaire/form" class="btn">Configurer</a>
                    </div>
                </div>
            </div>

             <div class="section">
                <div class="section-title">
                    <h2>Gestion des affectations</h2>
                    <div class="line"></div>
                </div>
                <div class="menu-grid">
                    <div class="menu-card">
                        <h3>Nouvelle affectation</h3>
                        <a href="/affectations/new" class="btn">Affecter</a>
                    </div>

                    <div class="menu-card">
                        <h3>Liste des affectations</h3>
                        <a href="/affectations" class="btn">Voir liste des affectations</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>