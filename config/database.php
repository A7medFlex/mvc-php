<?php

return [
    'driver' => env('DB_CONNECTION', 'mysql'),

    'connections' => [

        'mysql' => [
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', 3306),
            'dbname' => env('DB_DATABASE'),
            'user' => env('DB_USERNAME', 'root'),
            'password' => env('DB_PASSWORD'),
            'charset' => 'utf8mb4',
        ],
    ]
];