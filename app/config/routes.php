<?php

use app\controllers\ApiExampleController;
use app\controllers\TrajetController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;
use app\controllers\PanneController;
use app\controllers\SalaireController;

/** 
 * @var Router $router 
 * @var Engine $app
 */

$router->group('', function(Router $router) use ($app) {

    $router->get('/', function() {
        require __DIR__ . '/../../app/views/home.php';
    });

    $router->get('/home', function() {
        require __DIR__ . '/../../app/views/home.php';
    });

    $router->get('/trajets', [TrajetController::class, 'index']);
    $router->get('/trajets/new', [TrajetController::class, 'form']);
    $router->post('/trajets', [TrajetController::class, 'store']);

    $router->get('/trajets/top', [TrajetController::class, 'top']);

    $router->get('/vehicules/available', [PanneController::class, 'available']);
    $router->get('/vehicules/pannes', [PanneController::class, 'monthly']);

    $router->get('/salaire', [SalaireController::class, 'index']);
    $router->get('/salaire/form', [SalaireController::class, 'form']);
    $router->post('/salaire/store', [SalaireController::class, 'store']);



}, [ SecurityHeadersMiddleware::class ]);
