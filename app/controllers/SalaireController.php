<?php

namespace app\controllers;

use flight\Engine;
use app\models\SalaireModel;

class SalaireController {
    private Engine $app;
    private SalaireModel $model;

    public function __construct($app) {
        $this->app = $app;
        $this->model = new SalaireModel();
    }

    // Liste des salaires journaliers
    public function index() {
        $salaries = $this->model->getDailySalaries();
        $this->app->render('salaire/list', [
            'salaries' => $salaries
        ]);
    }

    // Formulaire pour modifier les pourcentages
    public function form() {
        $params = $this->model->getSalaryParams();
        $this->app->render('salaire/form', [
            'params' => $params
        ]);
    }

    // Enregistrement des parametres
    public function store() {
        $data = $this->app->request()->data->getData();
        $this->model->updateSalaryParams($data['min'], $data['max'], date('Y-m-d'));
        $this->app->redirect('/salaire');
    }
}
