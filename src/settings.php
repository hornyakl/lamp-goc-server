<?php
return [
    'quests' => [
        1 => [
            'id' => 1,
            'name' => 'Trash',
            'description' => 'Bring out the trash.',
            'latitude' => 49.600551,
            'longitude' => 6.113637,
            'experience_point' => 999,
        ],
        2 => [
            'id' => 2,
            'name' => 'Run a kilometer',
            'description' => 'Run a kilometer around the building.',
            'latitude' => 49.600551,
            'longitude' => 6.113637,
            'experience_point' => 1499,
        ]
    ],
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'goc',
            'username' => 'root',
            'password' => 'xH6.H4$SUmM_',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ]
    ],
];
