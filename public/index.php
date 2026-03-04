<?php
require __DIR__ . '/../bootstrap/app.php';//ici __DIR__==> publix on luis donner acced aux fichier a app.php


require VENDOR_PATH.'/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH); // programation orienter obj, ceci permet de crée des class , scope ,fonction, vazriables accecibel entres elle sauf si on leurs dis en exterieur
$dotenv->load();//crée un obj avec le chemin ou on dois trouver le chemin pour crée un projet
include '../db/queries.php';

$title = '';

switch ($_SERVER['REQUEST_URI']) {
    case '':
    case '/':
        $title = 'Page d’accueil';
        include VIEWS_DIR.'/home.php';
        break;
    case '/presences':
        $title = 'Prendre les présences';
        include VIEWS_DIR.'/attendances/index.php';
        break;
    case '/etudiants':
        $title = 'Tous les étudiants';
        include VIEWS_DIR.'/students/index.php';
        break;

    default:
        $title = '404';
        include VIEWS_DIR.'/404.php';
}
