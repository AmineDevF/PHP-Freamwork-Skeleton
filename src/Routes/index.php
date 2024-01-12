<?php

use App\Controllers\HomeController;
use App\Controllers\JobController;
use App\Router;


$router = new Router();

$router->get('/', HomeController::class, 'getAllUser');
$router->get('/user', HomeController::class, 'index');
$router->post('/insertuser/:id', JobController::class, 'update');
$router->post('/delete/{id}', HomeController::class, 'delete');


// All  jobs routing  sectionse

$router->get('/creat/job', JobController::class, 'creat');
$router->post('/insert/job', JobController::class, 'insert');
$router->get('/insert/:id', JobController::class, 'update');


$router->dispatch();
