<?php

require '../vendor/autoload.php';
const PUBLIC_PATH = __DIR__;
const APP_PATH = PUBLIC_PATH.'/..';
const VENDOR_PATH = PUBLIC_PATH.'/../vendor';
const VIEWS_DIR = PUBLIC_PATH.'/../views';

require VENDOR_PATH.'/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(APP_PATH); // programation orienter obj, ceci permet de crée des class , scope ,fonction, vazriables accecibel entres elle sauf si on leurs dis en exterieur
$dotenv->load();
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
