<?php

namespace Tecgdcs;

use App\Http\Controllers\PageController;

class Router
{
    private array $routes = [];
    private string $url;
    private string $method;

    public function __construct()
    {
        echo 'test';
        $this->routes = include ROOT_PATH . '/routes.php';
        $this->url = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];

    }

    public function route()
    {
        $action = [PageController::class, 'home'];
        foreach ($this->routes as $route) {
            //dd($route);
            if (($route['url'] === $this->url) && ($route['method'] === $this->method)) {
                $action = $route['action'];
                break;
            }
        }
        call_user_func(array(new $action[0](), $action[1]));//ecriture abstrait avec une expression pour appeller une classe
    }
}