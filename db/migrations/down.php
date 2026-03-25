<?php

use Illuminate\Database\Capsule\Manager as Capsule;

// 1. Inclure la connexion (qui charge l'autoloader et les helpers)
require_once __DIR__ . '/../connexion.php';

// 2. IMPORTANT : Appeler la fonction définie dans helpers.php
// pour initialiser la connexion à la base de données
//db_connection();

// 3. Maintenant Capsule est configuré et disponible
Capsule::schema()->dropAllTables();

