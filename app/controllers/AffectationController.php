<?php

namespace app\controllers;

use flight\Engine;
use app\models\AffectationModel;

class AffectationController {

    private Engine $app;
    private AffectationModel $model;

    public function __construct($app) {
        $this->app = $app;
        $this->model = new AffectationModel();
    }

    public function index() {
        $affectations = $this->model->getAllAffectations();

        $this->app->render('affectation/list', [
            'affectations' => $affectations
        ]);
    }
    
    public function form() {
        $this->app->render('affectation/form', [
            'chauffeurs' => $this->model->getChauffeurs(),
            'vehicules'  => $this->model->getVehicules()
        ]);
    }

   public function store() {
    $data = $this->app->request()->data->getData();

    $this->model->insertAffectation([
        'id_chauffeur' => $data['id_chauffeur'],
        'id_vehicule'  => $data['id_vehicule'],
        'date_jour'    => $data['date_jour']
    ]);

    $this->app->redirect('/affectations/new');
    }

}
