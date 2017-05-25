<?php

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],    
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            //'cookieValidationKey' => 'oQ0MnuOPwhQmR_9qWwUFwRdLLC5sY6C5',
            /*'cookieValidationKey' => '',*/
            'enableCsrfValidation' => false,

            'enableCookieValidation' => false,
            'cookieValidationKey' => '',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
	    'class' => 'webvimark\modules\UserManagement\components\UserConfig',
	    // Comment this if you don't want to record user logins
	    'on afterLogin' => function($event) {
                \webvimark\modules\UserManagement\models\UserVisitLog::newVisitor($event->identity->id);
            }
            
            //'identityClass' => 'app\models\User', 	// default
            //'enableAutoLogin' => true,		// default
        ],       

        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => '87.236.19.114', //вставляем имя или адрес почтового сервера
                'username' => '',
                'password' => '',
                'port' => '25',
                'encryption' => '',
            ],
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
        'authManager' => [
            'class' => 'yii\rbac\PhpManager',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [            
                '<action>' => 'site/<action>',
                '/admin/login' => '/user-management/auth/login',
                //'/admin/contacts' => '/admin/<controller>/update?id=1',
                '/admin/logout' => '/admin/logout', // Для выхода из админки
                ['pattern' => 'admin/<controller>', 'route' => 'admin/<controller>/index'],
                ['pattern' => '<controller>', 'route' => '<controller>/index'],
		//'<action>/<\d+>'=>'<action>',
		//'article/<\d+>'=>'site/article',
		'<action>/<id:[\d]+>'=>'site/<action>',
		//'shop/category/<category:[\w_\/-]+>'=>'shop/category',
		//'catalog/<action:cart|order>'=>'catalog/<action>',
		'catalog/<category:[\w_-]+>/<id:[\d]+>'=>'catalog/item',
		'catalog/<category:[\w_-]+>'=>'catalog/category',
		'catalog/<action>'=>'catalog/<action>',
		'catalog'=>'catalog/index',
            ],
        ],
	'assetManager' => [     
	    'class' => 'yii\web\AssetManager', 
	    'appendTimestamp' => true, 
	],
    ],
    'modules'=>[
      'user-management' => [
        'class' => 'webvimark\modules\UserManagement\UserManagementModule',
        // Here you can set your handler to change layout for any controller or action
        // Tip: you can use this event in any module
        'on beforeAction'=>function(yii\base\ActionEvent $event) {
            if ( $event->action->uniqueId == 'user-management/auth/login' ){
                $event->action->controller->layout = 'loginLayout.php';
            };
        },
      ],
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        'allowedIPs' => ['5.39.114.79', '127.0.0.1', '79.173.100.11']
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['95.161.6.148', '127.0.0.1', '79.173.100.11']
    ];
}

return $config;
