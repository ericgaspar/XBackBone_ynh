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

return array(
    'ldap' => array(
        'enabled' => true, // enable it
        'host' => 'ldap://127.0.0.1', // set the ldap host
        'port' => 389, // ldap port
        'base_domain' => 'dc=yunohost,dc=org', // the base_dn string
        'user_domain' => 'ou=Users', // the user dn string
        'rdn_attribute' => 'uid=', // the attribute to identify the user
    ),
);
