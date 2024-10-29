<?php
require_once 'vendor/autoload.php';

use App\Controller\IndexController;
use App\Route;
use App\RouteCollection;
use App\RouteMatcher;

$route = new Route(method: "GET", uri: "/", class: "App\Controller\IndexController", classMethod: "index");

$collection = new RouteCollection();
$collection->add($route);


$routeMatcher = new RouteMatcher($collection);
$route = $routeMatcher->match($_SERVER['REQUEST_URI']);
$classname = $route ->getClass();
$method = $route->getClassMethod() ;
$controller = new $classname();
$controller->$method();