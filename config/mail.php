<?php

return [
    'class' => 'yii\swiftmailer\Mailer',
    //'useFileTransport' => false,
    'transport' => [
        'class' => 'Swift_SmtpTransport',
        'host' => 'smtp.office365.com',
        'username' => 'seu@uleam.edu.ec',
        'password' => '',
        'port' => '587',
        
        //'encryption' => 'tls',
        'encryption' => 'tls',
        'streamOptions' => [
            'ssl' => [
                'allow_self_signed' => true,
                'verify_peer' => false,
                'verify_peer_name' => false,
            ],
        ],
    ],
];


