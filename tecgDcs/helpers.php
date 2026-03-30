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
    function db_connection(): void
    {
        $capsule = new \Illuminate\Database\Capsule\Manager();

        $capsule->addConnection([
            'driver' => env('DB_CONNECTION'),
            'host' => env('DB_HOST'),
            'database' => env('DB_DATABASE'),
            'port' => env('DB_PORT'),
            'username' => env('DB_USERNAME'),
            'password' => env('DB_PASSWORD'),
            'charset' => env('DB_CHARSET'),
            'collation' => env('DB_COLLATION'),
            'prefix' => '',
        ]);

        $capsule->setAsGlobal();

        $capsule->bootEloquent();

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