<?php

return [
    'base_url' => 'https://__DOMAIN__/__PATH__', // no trailing slash
    'db'       => [
        'connection' => 'mysql',
        'dsn'        => 'host=localhost;port=3306;dbname=__DB_NAME__',
        'username'   => __DB_USER__,
        'password'   => __DB_PWD__,
    ],
    'storage' => [
        'driver' => 'local',
        'path'   => '__DATADIR__',
    ],
];
