<?php


use app\controllers\SiteController;
use app\core\Application;
use app\models\User;

require_once __DIR__ . "/../vendor/autoload.php";
// https://github.com/vlucas/phpdotenv
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'userClass' => User::class,
    'db'=> [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];

$app = new Application(dirname(__DIR__), $config);

//$app->router->get('/', function () {
//    return "Hello!<br>Ate aqui esta o roteamento feito.";
//});

//$app->router->get('/', 'home');
//$app->router->get('/contact', 'contact');

$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/purchases', [SiteController::class, 'purchases']);
$app->router->get('/providers', [SiteController::class, 'providers']);
$app->router->get('/users', [SiteController::class, 'users']);
$app->router->get('/typologies', [SiteController::class, 'typologies']);
$app->router->get('/login', [SiteController::class, 'login']);
$app->router->get('/register', [SiteController::class, 'register']);
$app->router->get('/profile', [SiteController::class, 'profile']);
$app->router->get('/logout', [SiteController::class, 'logout']);


$app->run();
