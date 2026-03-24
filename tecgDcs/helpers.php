<?php

use JetBrains\PhpStorm\NoReturn;

if (!function_exists('dd')) {
    #[NoReturn]
    function dd(...$vars): void
    {
        foreach ($vars as $var) {
            var_dump($var);
            echo PHP_EOL;
        }
        die();
    }
}

if (!function_exists('env')) {
    function env(string $key, $default = null): mixed
    {
        return $_ENV[$key] ?? $default;
    }
}

if (!function_exists('db_connection')) {
    function db_connection(): ?PDO
    {
        $connection = env('DB_CONNECTION');
        $host = env('DB_HOST');
        $db_name = env('DB_DATABASE');
        $db_port = env('DB_PORT');
        $user = env('DB_USERNAME');
        $pass = env('DB_PASSWORD');
        $charset = env('DB_CHARSET');

        $dsn = "$connection:host=$host;port=$db_port;dbname=$db_name;charset=$charset";

        $options = [
            //PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            ////PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,//ça à effetque lorsque on fais un fetch pour ==> c'est un tableaux asscociatif
            //PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_BOTH,//les 2 formats sois en-> ou en ['']
            ////PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,//format en ->
            //PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            PDO::ATTR_EMULATE_PREPARES => false,
        ];


        try {
            return new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }

        return null;
    }
}

if (!function_exists('view')) {
    function view(string $name, array $data = []): void
    {
        $name = str_replace('.', '/', $name); //Remplacer les .par les /
        $view = VIEWS_PATH . '/' . $name . '.blade.php';
        if (file_exists($view)) {
            extract($data);//tous les variable correspond a la table data , d'autre variable a été créé
            include $view;
        } else {
            die('La vue n’existe pas');
        }
    }
}
if (!function_exists('csrf_token')) {
    function csrf_token(int $length = 32): string//longeur par default de 32 byte
    {
        return $_SESSION['token'] = bin2hex(random_bytes($length));//retourne une valeurs aleatoire de valeur et de nombre de octets, pour que la session commence , il faux comprendre quand un utilisateur utilise un ordinateur ==> session_start()
        //sequance de octet aleatoire , valeur numerqiue qui vas etres traduite en chaine apres on vas l'embaler dans bin2hex ==> prend une sequance binaire vers to une chaine hexadecimal
        //Calculer le token et le return dirrectement apres
    }
}