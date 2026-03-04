<?php
require __DIR__ . '/../bootstrap/app.php';//ici __DIR__==> publix on luis donner acced aux fichier a app.php


require VENDOR_PATH.'/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH); // programation orienter obj, ceci permet de crée des class , scope ,fonction, vazriables accecibel entres elle sauf si on leurs dis en exterieur
$dotenv->load();//crée un obj avec le chemin ou on dois trouver le chemin pour crée un projet
//include '../db/queries.php';


switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
    //require CONTROLLERS_PATH . '/HomeController.php';
//version statique
    Attendances\Controllers\HomeController::index();

    /*Appel de la méthide index via une instance
    * ne marche que si la methode n'est pas déclarer statique
    //version dynamique
    $controller = new HomeController();
    $controller->index();
    */
        break;
    case '/presences':
        Attendances\Controllers\AttendanceController::index();
        break;
    case '/etudiants':
        Attendances\Controllers\StudentController::index();
        break;

    default:
        $title = '404';
        include VIEWS_PATH.'/404.php';
}
