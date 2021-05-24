<?php

//use CoffeeCode\Router\Router;
//
//$router = new Router("https://localhost:8000");
//
///**
// * routes
// * The controller must be in the namespace Test\Controller
// */
//$router->namespace("Test")->group("name");
//
//$router->get("/", "Name:home", "name.home");
//$router->get("/hello", "Name:hello", "name.hello");
//$router->get("/redirect", "Name:redirect", "name.redirect");
//
///**
// * This method executes the routes
// */
//$router->dispatch();
//
///*
// * Redirect all errors
// */
//if ($router->error()) {
//    $router->redirect("name.hello");
//}
use App\Controllers\User;

/*
    ROTAS PARA API DO User;
*/
$route = [];
$route['/usuario/ver'] = User::class;
$route['/usuario'] = User::class;

