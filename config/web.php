<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'language' => 'es', // Español
    'name' => 'SEU',
    'timeZone' => 'America/Guayaquil',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => require(__DIR__ . '/modulos.php'),
    'components' => require(__DIR__ . '/componentes.php'),
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            '/*',
            /* 'admin/*', */
            'site/login',
            'site/correo',
            'site/logout',
            'site/error',
            'site/resetearclave',
            'site/recuperarclave',
            'site/registro',
            'site/registro-cliente',
            'site/auth',
            'site/authNegocio',
            'site/authCliente',
            'site/captcha',
            'site/lista-subcategoria',
            'site/lista-ciudad',
            'site/enviar-correo-bienvenida-negocio',
            'site/activar-cuenta',
            'site/bienvenida',
            'site/reenviar',
            'site/*',
            
        ]
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
            // uncomment the following to add your IP if you are not connecting from localhost.
            //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}


if (!YII_ENV_TEST) {
//     configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'generators' => [
//            'crud' => ['class' => 'cakpep\gii\generators\crud\Generator'],
        ]
    ];
}

return $config;
