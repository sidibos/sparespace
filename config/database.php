<?php
return [

    'default' => 'sparespace',
    'connections' => [
        'dev' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'homestead',
            'username'  => 'homestead',
            'password'  => 'secret',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'sparespace' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'sparespace',
            'username'  => 'homestead',
            'password'  => 'secret',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
        'content' => [
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'content',
            'username'  => 'root',
            'password'  => 'secret',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],
    ],
];