<?php

return [
    'base_url' => 'https://__DOMAIN__/__PATH__', // no trailing slash
    'db'       => [
        'connection' => 'sqlite',
        'dsn'        => '__FINALPATH__/resources/database/xbackbone.db',
        'username'   => null,
        'password'   => null,
    ],
    'storage' => [
        'driver' => 'local',
        'path'   => '__FINALPATH__/storage',
    ],
];
