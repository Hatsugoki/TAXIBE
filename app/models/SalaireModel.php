<?php

namespace app\models;

use Flight;
use flight\database\PdoWrapper;

class SalaireModel {
    private PdoWrapper $db;

    public function __construct() {
        $this->db = Flight::db();
    }

    public function getDailySalaries(): array {
        $sql = "
            SELECT 
                c.nom AS chauffeur,
                a.date_jour,
                SUM(t.recette) AS total_recette,
                v.versement_minimum,
                ps.pourcent_min,
                ps.pourcent_max,
                SUM(
                    CASE 
                        WHEN t.recette >= v.versement_minimum THEN t.recette * ps.pourcent_max/100
                        ELSE t.recette * ps.pourcent_min/100
                    END
                ) AS salaire
            FROM trajet_taxb t
            JOIN affectation_taxb a ON t.id_affectation = a.id
            JOIN chauffeur_taxb c ON a.id_chauffeur = c.id
            JOIN vehicule_taxb v ON a.id_vehicule = v.id
            JOIN param_salaire_taxb ps 
                ON ps.date_application <= a.date_jour
            WHERE ps.date_application = (
                SELECT MAX(ps2.date_application) 
                FROM param_salaire_taxb ps2 
                WHERE ps2.date_application <= a.date_jour
            )
            GROUP BY c.id, a.date_jour, v.id
            ORDER BY a.date_jour DESC, c.nom
        ";

        return $this->db->query($sql)->fetchAll();
    }

    public function getSalaryParams(): array {
        return $this->db->query("SELECT * FROM param_salaire_taxb ORDER BY date_application DESC")->fetchAll();
    }

    public function updateSalaryParams(float $min, float $max, string $date): bool {
        $sql = "INSERT INTO param_salaire_taxb (pourcent_min, pourcent_max, date_application)
                VALUES (:min, :max, :date)";
        return $this->db->prepare($sql)->execute([
            'min' => $min,
            'max' => $max,
            'date' => $date
        ]);
    }
}
