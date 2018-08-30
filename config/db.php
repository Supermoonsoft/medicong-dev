<?php
return[
    'class' => 'yii\db\Connection', 
    'dsn' => 'pgsql:host=61.19.22.99;port=5432;dbname=medicong',
    'username' => 'postgres',
    'password' => 'qazwsxedcr112233',
    'charset' => 'utf8',
    'schemaMap' => [
        'pgsql' => [
            'class' => 'yii\db\pgsql\Schema',           
            'defaultSchema' => 'public'
        ],
        //'pgsql'=> 'tigrov\pgsql\Schema',
    ],
];

