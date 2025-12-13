-- Chauffeurs
INSERT INTO chauffeur_taxb (nom) VALUES 
('Rabe'), ('Jean'), ('Marie');

-- Véhicules
INSERT INTO vehicule_taxb (immatriculation, modele, versement_minimum) VALUES
('MG-123-A', 'Toyota Hiace', 100000),
('MG-456-B', 'Mercedes Sprinter', 120000),
('MG-789-C', 'Nissan NV200', 90000);

-- Trajet types
INSERT INTO trajet_type_taxb (point_depart, point_arrivee, distance_km) VALUES
('Andoharanofotsy','Ambohibao', 12),
('Andoharanofotsy','Ankadifotsy', 15),
('Ambohibao','Ivato', 20);

-- Affectations
INSERT INTO affectation_taxb (id_chauffeur, id_vehicule, date_jour) VALUES
(1, 1, '2025-12-12'),
(2, 2, '2025-12-12'),
(3, 3, '2025-12-12'),
(1, 1, '2025-12-13'),
(2, 2, '2025-12-13');

-- Trajets
INSERT INTO trajet_taxb (id_affectation, id_trajet_type, debut, fin, recette, carburant) VALUES
(1, 1, '2025-12-12 08:00:00', '2025-12-12 08:30:00', 50000, 5000),
(2, 2, '2025-12-12 09:00:00', '2025-12-12 09:40:00', 60000, 8000),
(3, 3, '2025-12-12 10:00:00', '2025-12-12 10:50:00', 70000, 10000),
(4, 1, '2025-12-13 08:00:00', '2025-12-13 08:30:00', 55000, 5000),
(5, 2, '2025-12-13 09:00:00', '2025-12-13 09:40:00', 65000, 8000);

-- Pannes
INSERT INTO panne_taxb (id_vehicule, debut, fin) VALUES
(2, '2025-12-10', '2025-12-11'),
(3, '2025-12-12', '2025-12-12');

-- Paramètres salaire
INSERT INTO param_salaire_taxb (pourcent_min, pourcent_max, date_application) VALUES
(8, 25, '2025-12-01');
