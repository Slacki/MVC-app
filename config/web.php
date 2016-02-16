<?php

return [
    'name' => 'Your application',
    'applicationDirectory' => dirname(__FILE__) . '/..',
    'defaultAction' => 'site/index',
    'database' => [
        'dns' => 'mysql:host=your_host;dbname=your_db_name;charset=UTF8',
        'username' => '',
        'password' => '',
        'options' => [],
    ],
    'router' => [
        'rules' => [
            [
                'pattern' => '<controller:[a-z]+>/<action:[a-z]+>/<id:\d+>',
                'route' => '<controller>/<action>',
            ],
            [
                'pattern' => '<controller:[a-z]+>/<action:[a-z]+>',
                'route' => '<controller>/<action>',
            ],
            [
                'pattern' => '<controller:[a-z]+>',
                'route' => '<controller>/index',
            ],
        ],
    ],
    'dispatcher' => [
        'appNamespace' => '\\App',
    ],
];