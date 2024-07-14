<?php 

require_once __DIR__.'/../vendor/autoload.php';
use app\Application;
use app\controllers\AuthController;
use app\controllers\SiteController;

$app = new Application(__DIR__.'/../src/');

$app->router->get('/', [SiteController::class, 'home']);

$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact', [SiteController::class, 'handleContact']);

$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/register', [AuthController::class, 'register']);
$app->router->get('/register', [AuthController::class, 'register']);


$app->run();

?>