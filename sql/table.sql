create database taxibe;
USE taxibe;

CREATE TABLE chauffeur_taxb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100)
);

CREATE TABLE vehicule_taxb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    immatriculation VARCHAR(20),
    modele VARCHAR(50),
    versement_minimum DECIMAL(10,2)
);

CREATE TABLE trajet_type_taxb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    point_depart VARCHAR(50),
    point_arrivee VARCHAR(50),
    distance_km INT
);

CREATE TABLE affectation_taxb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_chauffeur INT,
    id_vehicule INT,
    date_jour DATE,
    FOREIGN KEY (id_chauffeur) REFERENCES chauffeur_taxb(id),
    FOREIGN KEY (id_vehicule) REFERENCES vehicule_taxb(id)
);

CREATE TABLE trajet_taxb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_affectation INT,
    id_trajet_type INT,
    debut DATETIME,
    fin DATETIME,
    recette DECIMAL(10,2),
    carburant DECIMAL(10,2),
    FOREIGN KEY (id_affectation) REFERENCES affectation_taxb(id),
    FOREIGN KEY (id_trajet_type) REFERENCES trajet_type_taxb(id)
);

CREATE TABLE panne_taxb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_vehicule INT,
    debut DATE,
    fin DATE,
    FOREIGN KEY (id_vehicule) REFERENCES vehicule_taxb(id)
);

CREATE TABLE param_salaire_taxb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    pourcent_min DECIMAL(5,2),
    pourcent_max DECIMAL(5,2),
    date_application DATE
);

CREATE TABLE salaire_chauffeur_taxb (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_chauffeur INT,
    date_jour DATE,
    montant DECIMAL(10,2),
    id_param INT,
    FOREIGN KEY (id_chauffeur) REFERENCES chauffeur_taxb(id),
    FOREIGN KEY (id_param) REFERENCES param_salaire_taxb(id)
);
