<?php
/**
 * Application configuration shared by all test types
 */
return [
    'components' => [
        'db' => [
            'dsn' => 'sqlite:tests/_data/database.db'
        ],
        'mailer' => [
            'useFileTransport' => true
        ],
        'urlManager' => [
            'showScriptName' => true
        ]
    ]
];
