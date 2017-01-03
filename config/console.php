<?php

Yii::setAlias('@tests', dirname(__DIR__) . '/tests/codeception');

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic-console',
    'language'       => 'ru-RU',
    'sourceLanguage' => 'ru-RU',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'app\commands',
    'timeZone'   => 'Europe/Moscow',
    'components' => [
	    'formatter'            => [
		    'dateFormat' => 'dd.MM.yyyy',
		    'datetimeFormat' => 'dd.MM.yyyy HH:mm:ss',
		    'timeZone' => 'Europe/Moscow',
		    'decimalSeparator' => ',',
		    'thousandSeparator' => ' ',
		    'currencyCode' => 'RUR',
	    ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'image'        => [
	        'class'  => 'yii\image\ImageDriver',
	        'driver' => 'GD',  //GD or Imagick
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
    ],
    'params' => $params,

    'controllerMap' => [
        'migrate' => [ // Fixture generation command line.
			'class'=>'isnlab\common\commands\IsnBaseMigrateController',
        ],
        'message' => [
	        'class' => 'isnlab\common\commands\IsnBaseMessageController',
        ],
    ],

];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
