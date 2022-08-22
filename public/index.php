<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

use app\core\Application;
use app\controller\SiteCtrl;
use app\controller\AuthCtrl;


$app = new Application(dirname(__DIR__));


$app->router->get('/', [SiteCtrl::class, 'home']);
$app->router->get('home', [SiteCtrl::class, 'home']);
$app->router->get('profile', [SiteCtrl::class, 'profile']);

$app->router->get('login', [AuthCtrl::class, 'login']);
$app->router->get('register', [AuthCtrl::class, 'register']);


$app->run();
