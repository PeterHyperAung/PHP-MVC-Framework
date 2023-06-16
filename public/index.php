<?php

require_once __DIR__.'/../vendor/autoload.php';
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/', 'index');

$app->router->get('/contact', 'contact'); 

$app->router->post('/contact', [\app\controllers\SiteController::class, 'handleContact']);

$app->run();
