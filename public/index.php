<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use app\core\Application;
use app\controller\SiteCtrl;
use app\controller\AuthCtrl;
use app\model\RegisterModel;

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
  "userClass" => RegisterModel::class,
  "db" => [
    'dsn' => $_ENV['DB_DSN'],
    'user' => $_ENV['DB_USER'],
    'password' => $_ENV['DB_PASSWORD'],
  ]
];

$app = new Application(dirname(__DIR__), $config);


$app->router->get('/', [SiteCtrl::class, 'home']);
$app->router->get('home', [SiteCtrl::class, 'home']);
$app->router->get('profile', [SiteCtrl::class, 'profile']);

$app->router->get('login', [AuthCtrl::class, 'login']);
$app->router->post('login', [AuthCtrl::class, 'login']);
$app->router->get('register', [AuthCtrl::class, 'register']);
$app->router->post('register', [AuthCtrl::class, 'register']);
$app->router->get('logout', [AuthCtrl::class, 'logout']);


$app->run();
