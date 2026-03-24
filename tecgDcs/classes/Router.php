<?php
/*
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
*/

namespace Tecgdcs;

class Router
{
    private string $url;
    private string $method;
    private array $action;


    //class qu'on devrais appelr pour la route
    public function __construct(
        private array $routes = [],//valeur par default si on passe le constrcuteur sans valeurs
    )
    {
        //visiel pour chaque methosd
        $this->routes = include ROOT_PATH . '/routes.php';
        //$this->url = $_SERVER['REQUEST_URI'];
        $this->url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->method = $_SERVER['REQUEST_METHOD'];
    }

    private function check_route(): array
    {
        //cet function vas retourner un array , retuurn qqch
        //tester si 'url de la routes est bien present en tant que valeurs
        //parcourir les routes , tester si l'url exictant dans la route courant on dois s’arreter
        foreach ($this->routes as $route) {
            //si dans l'array qui reprsente une rote on return l'action
            // si il se trouve l'url et la methode
            //strtolower — Renvoie une chaîne en minuscules
            if (in_array(strtolower($this->url), $route) &&
                in_array(strtolower($this->method), $route)) {
                return $route['action'];
            }
        }
        die('404');
    }

    public function route()
        //analyse des routs
    {
        //si la clef existe dans la array des route on peux recupere l'action courant
        // redirection vers la page 404
        //call_user_funct() permet de appeller une fonction de user
        $action = $this->check_route();
        //Action0 est un objet(transforme en ) d'une instance 0
        $action[0] = new $action[0];
        call_user_func($action);
    }
}