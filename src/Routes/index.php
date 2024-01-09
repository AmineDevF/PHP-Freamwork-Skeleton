<?php

use App\Controllers\HomeController;
use App\Controllers\JobController;
use App\Router;


$router = new Router();

$router->get('/', HomeController::class, 'getAllUser');
$router->get('/user', HomeController::class, 'user');


// All  jobs routing  sectionse

$router->get('/creat/job', JobController::class, 'creat');
$router->post('/insert/job', JobController::class, 'insert');


$router->dispatch();
