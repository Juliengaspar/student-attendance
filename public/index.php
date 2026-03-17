<?php

use Tecgdcs\Router;

session_start();
//si il n'as pas encore de session il en demarre une et si il y a deja une session alors il continue avec cet session 

require __DIR__ . '/../bootstrap/app.php';

require VENDOR_PATH . '/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();


//evoque un nouveux constucteur ==> pour les routs
new Router()->route();