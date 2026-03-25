<?php

use Tecgdcs\Router;
use Illuminate\Database\Capsule\Manager as Capsule;

session_start();

require __DIR__ . '/../bootstrap/app.php';

require VENDOR_PATH . '/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(ROOT_PATH);
$dotenv->load();


db_connection();


new Router()->route();