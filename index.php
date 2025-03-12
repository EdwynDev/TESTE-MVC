<?php
require_once 'core/Model.php';
require_once 'core/Controller.php';
require_once 'core/Router.php';
require_once 'config/routes.php';


$url = isset($_GET['url']) ? $_GET['url'] : '';
$url = rtrim($url, '/');

$router = new App\Core\Router($routes);
$router->dispatch($url);
