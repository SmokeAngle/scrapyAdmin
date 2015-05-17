<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
	    'user-management' => [
		    'class' => 'webvimark\modules\UserManagement\UserManagementModule',
		    // Here you can set your handler to change layout for any controller or action
		    // Tip: you can use this event in any module
		    'on beforeAction'=>function(yii\base\ActionEvent $event) {
		    	if ( $event->action->uniqueId == 'user-management/auth/login' )
		    	{
		    		$event->action->controller->layout = 'loginLayout.php';
		    	};
		    },
	    ],
	],
    'components' => [
        'user' => [
            'class' => 'webvimark\modules\UserManagement\components\UserConfig',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
    ],
    'params' => $params,
];
