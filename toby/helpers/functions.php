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
