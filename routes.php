<?php
return [
    [
        'url' => '/',
        'method' => 'GET',
        'action' => [
            \App\Http\Controllers\PageController::class,
            'home',
        ],

    ],
    [
        'url' => '/etudiants',
        'method' => 'GET',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'index',
        ],

    ],
    [
        'url' => '/etudiants',
        'method' => 'POST',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'store',
        ],

    ],
    [
        'url' => '/etudiants/create',
        'method' => 'GET',
        'action' => [
            \App\Http\Controllers\StudentController::class,
            'create',
        ],

    ],
    [
        'url' => '/presences',
        'method' => 'GET',
        'action' => [
            \App\Http\Controllers\AttendanceController::class,
            'index',
        ],
    ],
];