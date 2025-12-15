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
    $date = $_GET['date'] ?? 'all';

    if ($date === 'all') {
        $trajets = $this->model->getAllTrajets();
    } else {
        $trajets = $this->model->getTrajetsByDate($date);
    }

    $dates = $this->model->getAvailableDates();

    $this->app->render('trajet/list', [
        'date' => $date,
        'trajets' => $trajets,
        'dates' => $dates
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

    public function top() {
    $date = $_GET['date'] ?? null;
    $dates = $this->model->getAvailableDates();
    $trajets = $this->model->getTopTrajetsByDate($date);

    $this->app->render('trajet/top', [
        'date' => $date,
        'dates' => $dates,
        'trajets' => $trajets
    ]);
    }

}
