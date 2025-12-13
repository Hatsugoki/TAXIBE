<?php

namespace app\controllers;

use flight\Engine;
use app\models\TrajetModel;

class TrajetController {

    private Engine $app;
    private TrajetModel $model;

    public function __construct($app) {
        $this->app = $app;
        $this->model = new TrajetModel();
    }

    public function index() {
        $date = $_GET['date'] ?? date('Y-m-d');
        $trajets = $this->model->getTrajetsByDate($date);

        $this->app->render('trajet/list', [
            'date' => $date,
            'trajets' => $trajets
        ]);
    }

    public function form() {
        $this->app->render('trajet/form');
    }

    public function store() {
        $data = $this->app->request()->data->getData();
        $this->model->insertTrajet($data);

        $this->app->redirect('/trajets');
    }
}
