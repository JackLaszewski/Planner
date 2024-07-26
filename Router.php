<?php
class Router {
    private $routes = [];

    public function add($route, $controller, $method) {
        $this->routes[$route] = [$controller, $method];
    }

    public function dispatch($url) {
        if (array_key_exists($url, $this->routes)) {
            $controller = $this->routes[$url][0];
            $method = $this->routes[$url][1];
            (new $controller)->$method();
        } else {
            echo "404 - Not Found";
        }
    }
}
