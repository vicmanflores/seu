<?php

return [
    'Administracion' => [
        'class' => 'app\modules\Administracion\Modulo',
    ],
    'datecontrol' => [
        'class' => 'kartik\datecontrol\Module',
        'autoWidget' => true,
        'autoWidgetSettings' => [
            'date' => [
                'pluginOptions' => [
                    'autoclose' => true,
                    'todayHighlight' => true,
                // 'todayBtn' => true,
                ],
            ],
        ],
    ],
    'gridview' => [
        'class' => '\kartik\grid\Module',
        // enter optional module parameters below - only if you need to  
        // use your own export download action or custom translation 
        // message source
        'downloadAction' => 'gridview/export/download',
        'i18n' => [
            'class' => 'yii\i18n\PhpMessageSource',
            'basePath' => '@kvgrid/messages',
            'forceTranslation' => true
        ],
    ],
    //MODULO DE GESTION DE USUARIOS    
    'admin' => [
        'class' => 'mdm\admin\Module',
        //  'layout' => 'left-menu', // it can be '@path/to/your/layout'.
        'layout' => 'top-menu', // it can be '@path/to/your/layout'.
        'controllerMap' => [
            'assignment' => [
                'class' => 'mdm\admin\controllers\AssignmentController',
                'userClassName' => 'app\models\User',
                'idField' => 'id'
            ],
        /* 'Route' => [
          'class' => 'mdm\admin\controllers\RouteController', // add another controller
          ], */
        ],
        'menus' => [
            'assignment' => [
                'label' => 'Asignación de Roles' // change label
            ],
        /* 'user' => [
          'label' => 'Usuario' // change label
          ],
         */
        //'route' => null, // disable menu route 
        /*  'rule' => null, // disable menu route 
          'permission' => null,
          'route' => null, // disable menu route */
        ]
    ],
];
