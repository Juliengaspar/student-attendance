<?php

use App\Http\Controllers\PageController;
use Tecgdcs\Router;

require __DIR__ . '/../bootstrap/app.php';//ici __DIR__==> publix on luis donner acced aux fichier a app.php


require VENDOR_PATH . '/autoload.php';
session_start();

$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH); // programation orienter obj, ceci permet de crée des class , scope ,fonction, vazriables accecibel entres elle sauf si on leurs dis en exterieur
$dotenv->load();//crée un obj avec le chemin ou on dois trouver le chemin pour crée un projet
//include '../db/queries.php';
$router = new Router();
$router->route();
