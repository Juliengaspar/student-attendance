<?php
require __DIR__ . '/../bootstrap/app.php';//ici __DIR__==> publix on luis donner acced aux fichier a app.php


require VENDOR_PATH.'/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH); // programation orienter obj, ceci permet de crée des class , scope ,fonction, vazriables accecibel entres elle sauf si on leurs dis en exterieur
$dotenv->load();//crée un obj avec le chemin ou on dois trouver le chemin pour crée un projet
//include '../db/queries.php';


switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
    require CONTROLLERS_PATH.'/IndexController.php';
    index();
        break;
    case '/presences':
        require CONTROLLERS_PATH.'/AttendanceController.php';
        index();
        break;
    case '/etudiants':
        require CONTROLLERS_PATH.'/StudentController.php';
        index();
        break;

    default:
        $title = '404';
        include VIEWS_PATH.'/404.php';
}
