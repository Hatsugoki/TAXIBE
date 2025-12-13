<?php

namespace app\models;

use Flight;
use flight\database\PdoWrapper;

class TrajetModel {

    private PdoWrapper $db;

    public function __construct() {
        $this->db = Flight::db();
    }

    public function getTrajetsByDate(string $date): array {
        $sql = "
            SELECT 
                a.date_jour,
                c.nom AS chauffeur,
                v.immatriculation,
                v.modele,
                SUM(tt.distance_km) AS km_effectue,
                SUM(t.recette) AS total_recette,
                SUM(t.carburant) AS total_carburant
            FROM trajet_taxb t
            JOIN affectation_taxb a ON t.id_affectation = a.id
            JOIN chauffeur_taxb c ON a.id_chauffeur = c.id
            JOIN vehicule_taxb v ON a.id_vehicule = v.id
            JOIN trajet_type_taxb tt ON t.id_trajet_type = tt.id
            WHERE a.date_jour = :date
            GROUP BY a.id
        ";

        $stmt = $this->db->prepare($sql);
        $stmt->execute(['date' => $date]);

        return $stmt->fetchAll();
    }

    public function insertTrajet(array $data): bool {
        $sql = "
            INSERT INTO trajet_taxb 
            (id_affectation, id_trajet_type, debut, fin, recette, carburant)
            VALUES (:affectation, :trajet_type, :debut, :fin, :recette, :carburant)
        ";

        return $this->db->prepare($sql)->execute($data);
    }
}
