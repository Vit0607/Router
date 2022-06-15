<?php

class Router {
    protected $routes;

    public function __construct($routes)
    {
        $this->roures = $routes;
    }

//    Проверка адреса и подключение страницы:
    public function checkUrl() {
        $route = $_SERVER['REQUEST_URI'];
        $routes = $this->routes;

        if(array_key_exists($route, $routes)) {
            include $routes[$route]; exit;
        } else {
            echo '404';
        }
    }
}

