<?php

require __DIR__ . "/vendor/autoload.php";
require __DIR__ . "/config/Autoload.php";
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

use App\Helpers\Functions;
$func = new Functions();



$routes = require __DIR__ ."/config/Routes.php";

if(!array_key_exists('PATH_INFO',$_SERVER) || !array_key_exists($_SERVER['PATH_INFO'],$routes)){
    $func->response(false,'API não encontrada',404);
    exit;
}


$caminho = $_SERVER['PATH_INFO'];
$class = $routes[$caminho];
$controller = new $class();
$controller->index();