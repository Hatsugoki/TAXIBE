<?php

namespace app\models;

use Flight;
use flight\database\PdoWrapper;

class AffectationModel {

    private PdoWrapper $db;

    public function __construct() {
        $this->db = Flight::db();
    }

    public function getAllAffectations(): array {
        $sql = "
            SELECT 
                a.date_jour,
                c.nom AS chauffeur,
                v.immatriculation,
                v.modele
            FROM affectation_taxb a
            JOIN chauffeur_taxb c ON c.id = a.id_chauffeur
            JOIN vehicule_taxb v ON v.id = a.id_vehicule
            ORDER BY a.date_jour DESC
        ";

        return $this->db->query($sql)->fetchAll();
    }

    public function getChauffeurs(): array {
        return $this->db
            ->query("SELECT id, nom FROM chauffeur_taxb ORDER BY nom")
            ->fetchAll();
    }

    public function getVehicules(): array {
        return $this->db
            ->query("SELECT id, immatriculation, modele FROM vehicule_taxb ORDER BY immatriculation")
            ->fetchAll();
    }

    public function insertAffectation(array $data): bool {
        $sql = "
            INSERT INTO affectation_taxb (id_chauffeur, id_vehicule, date_jour)
            VALUES (:chauffeur, :vehicule, :date)
        ";

        return $this->db->prepare($sql)->execute([
            'chauffeur' => $data['id_chauffeur'],
            'vehicule'  => $data['id_vehicule'],
            'date'      => $data['date_jour']
        ]);
    }
}
