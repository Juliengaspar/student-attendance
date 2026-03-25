<?php

require_once __DIR__ . '/../vendor/autoload.php';

if (!isset($dotenv)) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();
}

db_connection();
/* const PUBLIC_PATH = PUBLIC_PATH??__DIR__;
 const APP_PATH = PUBLIC_PATH . '/..';
 const VENDOR_PATH = PUBLIC_PATH . '/../vendor';

const VIEWS_DIR = PUBLIC_PATH . '/../views';

require VENDOR_PATH . '/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(APP_PATH);//programation orienter obj, ceci permet de crée des class , scope ,fonction, vazriables accecibel entres elle sauf si on leurs dis en exterieur
$dotenv->load();
*/
/*
$host = $_ENV['DB_HOST'];
$db_name = $_ENV['DB_DATABASE'];
$db_port = $_ENV['DB_PORT'];
$user = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];
$charset = $_ENV['DB_CHARSET'];
$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
*/
/* même chose sauf avec la fonction dans helpers

$host = env('DB_HOST');
$db_name = env('DB_DATABASE');
$db_port = env('DB_PORT');
$user = env('DB_USERNAME');
$pass = env('DB_PASSWORD');
$charset = env('DB_CHARSET');

$dsn = "mysql:host=$host;port=$db_port;dbname=$db_name;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES $charset COLLATE utf8mb4_unicode_ci"
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    echo 'Erreur de connexion : ' . $e->getMessage();
}
*/