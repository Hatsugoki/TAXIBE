<?php

use app\controllers\ApiExampleController;
use app\controllers\TrajetController;
use app\middlewares\SecurityHeadersMiddleware;
use flight\Engine;
use flight\net\Router;

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

    $router->group('/api', function() use ($router) {
        $router->get('/users', [ApiExampleController::class, 'getUsers']);
        $router->get('/users/@id:[0-9]+', [ApiExampleController::class, 'getUser']);
        $router->post('/users/@id:[0-9]+', [ApiExampleController::class, 'updateUser']);
    });

}, [ SecurityHeadersMiddleware::class ]);
