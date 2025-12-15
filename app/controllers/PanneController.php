<?php

namespace app\controllers;

use flight\Engine;
use app\models\PanneModel;

class PanneController {

    private Engine $app;
    private PanneModel $model;

    public function __construct(Engine $app) {
        $this->app = $app;
        $this->model = new PanneModel();
    }

    // Vehicules disponibles pour une date
    public function available() {
        $date = $_GET['date'] ?? date('Y-m-d');
        $vehicles = $this->model->getAvailableVehicles($date);

        $this->app->render('panne/available', [
            'date' => $date,
            'vehicles' => $vehicles
        ]);
    }

    // Taux de panne par mois
    public function monthly() {
        $year = $_GET['year'] ?? date('Y');
        $month = $_GET['month'] ?? date('m');
        $data = $this->model->getMonthlyBreakdown($year, $month);

        $this->app->render('panne/monthly', [
            'year' => $year,
            'month' => $month,
            'data' => $data
        ]);
    }
}
