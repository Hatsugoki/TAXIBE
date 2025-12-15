<?php

namespace app\models;

use Flight;
use flight\database\PdoWrapper;

class PanneModel {

    private PdoWrapper $db;

    public function __construct() {
        $this->db = Flight::db();
    }

    public function getAvailableVehicles(string $date): array {
        $sql = "
            SELECT v.id, v.immatriculation, v.modele
            FROM vehicule_taxb v
            WHERE v.id NOT IN (
                SELECT id_vehicule
                FROM panne_taxb
                WHERE :date BETWEEN debut AND fin
            )
        ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(['date' => $date]);
        return $stmt->fetchAll();
    }

    public function getMonthlyBreakdown(int $year, int $month): array {
        $sql = "
            SELECT 
                v.id,
                v.immatriculation,
                v.modele,
                COALESCE(SUM(DATEDIFF(
                    LEAST(fin, LAST_DAY(:month_start)), 
                    GREATEST(debut, :month_start)
                ) + 1), 0) AS jours_panne,
                ROUND(
                    COALESCE(SUM(DATEDIFF(
                        LEAST(fin, LAST_DAY(:month_start)), 
                        GREATEST(debut, :month_start)
                    ) + 1), 0) / 25 * 100, 2
                ) AS taux_panne
            FROM vehicule_taxb v
            LEFT JOIN panne_taxb p ON v.id = p.id_vehicule
                AND (MONTH(p.debut) = :month AND YEAR(p.debut) = :year 
                     OR MONTH(p.fin) = :month AND YEAR(p.fin) = :year)
            GROUP BY v.id
        ";

        $month_start = "$year-$month-01";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            'year' => $year,
            'month' => $month,
            'month_start' => $month_start
        ]);

        return $stmt->fetchAll();
    }
}
