<?php
if (! function_exists('dd')) {
    function dd(...$var): void
    {
        var_dump($var);
        exit();
    }
}

if (! function_exists('env')) {
    function env(string $key, $default = null): mixed
    {
        return $_ENV[$key] ?? $default;
    }
}
if (! function_exists('db_connexion')) {
    function db_connexion(): PDO|null
    {
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
        ];

        try {

           return new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            echo 'Erreur de connexion : '.$e->getMessage();
        }
    }
}