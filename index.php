<?php
require_once "config.php";
require_once "Router.php";
require_once "controllers/MainController.php";

$router = new Router();

// Define routes
$router->add("/", MainController::class, "index");
$router->add("/about", MainController::class, "about");

// Dispatch the requested URL
$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$router->dispatch($url);
