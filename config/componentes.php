<?php

return [
    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    'user' => [
        'identityClass' => 'app\models\User',
        // 'enableAutoLogin' => true,
        'enableAutoLogin' => false,
    //  'authTimeout' => 30, //Seconds **
    ],
//MODULO RBAC
    'authManager' => [
        'class' => 'yii\rbac\DbManager',
        'defaultRoles' => ['guest'],
    ],
    //MODULO PARA ENVIO DE EMAIL
    'request' => [
        // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
        'cookieValidationKey' => 'e19qsp-LLP6tNCBu4ZU6DiTwtA4l8_wF',
    ],
    'formatter' => [
        'dateFormat' => 'dd-MM-yyyy',
        //'locale' => 'es_ES', //your language locale
        // 'dateFormat' => 'long',
        'defaultTimeZone' => 'America/Guayaquil', // time zone
        //
          // 'thousandSeparator' => ',',
        //'decimalSeparator' => '.',
        'currencyCode' => 'USD',
    ],
    'urlManager' => [
        'class' => 'yii\web\UrlManager',
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'enableStrictParsing' => false,
        //'suffix' => '.aspx',
        'rules' => [
            /* '<controller:\w+>/<slug>' => '<controller>/detalle', */
            '<controller:\w+>/<id:\d+>' => '<controller>/view',
            '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
            '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
            '<module>/<controller>/<action>/<id:\d+>' => '<module>/<controller>/<action>',
        ]
    ],
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'db' => require(__DIR__ . '/db.php'),
    'mailer' => require(__DIR__ . '/mail.php'),
    'view' => [//
        'theme' => [
            'pathMap' => [
                //  '@app/views' => '@vendor/dmstr/yii2-adminlte-asset/example-views/yiisoft/yii2-app'
                '@app/views' => '@app/views/',
            ],
        ],
        'class' => '\rmrevin\yii\minify\View',
        'enableMinify' => !YII_DEBUG,
        'concatCss' => true, // concatenate css
        'minifyCss' => true, // minificate css
        'concatJs' => true, // concatenate js
        'minifyJs' => true, // minificate js
        'minifyOutput' => true, // minificate result html page
        'webPath' => '@web', // path alias to web base
        'basePath' => '@webroot', // path alias to web base
        'minifyPath' => '@webroot/assets/minify', // path alias to save minify result
        'jsPosition' => [\yii\web\View::POS_END], // positions of js files to be minified
        'forceCharset' => 'UTF-8', // charset forcibly assign, otherwise will use all of the files found charset
        'expandImports' => true, // whether to change @import on content
        'compressOptions' => ['extra' => true], // options for compress
        'excludeFiles' => [
            'jquery.js', // exclude this file from minification
            'app-[^.].js', // you may use regexp
        ],
        'excludeBundles' => [
        //\dev\helloworld\AssetBundle::class, // exclude this bundle from minification
        ],
    ], //
    'assetManager' => [//
        'bundles' => [
            'dmstr\web\AdminLteAsset' => [
                'skin' => 'skin-blue',
            // 'skin' => 'skin-green',
            ],
        ],
    ], //
        
];
