<?php
/**
 * Application configuration shared by all test types
 */
return [
    'id' => 'Magic Scopes',
    'basePath' => dirname(__DIR__),
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'sqlite:_data/database.db'
        ],
        'mailer' => [
            'useFileTransport' => true
        ],
        'urlManager' => [
            'showScriptName' => true
        ]
    ]
];
