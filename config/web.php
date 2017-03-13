<?php

	$params = require( __DIR__ . '/params.php' );

	$config = [
		'id'         => 'basic',
		'basePath'   => dirname( __DIR__ ),
		'bootstrap'  => [ 'log' ],
		'timeZone'   => 'Europe/Moscow',
		'components' => [
			'formatter' => [
				'dateFormat'     => 'd.MM.Y',
				'timeFormat'     => 'H:mm:ss',
				'defaultTimeZone' => 'UTC',
				'timeZone' => 'UTC',
				'datetimeFormat' => 'd.MM.Y H:mm',
			],
			'request'   => [
				// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
				'cookieValidationKey' => 'k-zByS1xpXFUtwRjXpkmgMWv1COpnTFg',
			],
			/* 'cache' => [
				 'class' => 'yii\caching\FileCache',
			 ],
			 /*'user' => [
				 dentityClass' => 'app\models\User',
				 'enableAutoLogin' => true,
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
			],*/
			'log'       => [
				'traceLevel' => YII_DEBUG ? 3 : 0,
				'targets'    => [
					[
						'class'  => 'yii\log\FileTarget',
						'levels' => [ 'error', 'warning' ],
					],
				],
			],
			'db'        => require( __DIR__ . '/db.php' ),
			/*
			'urlManager' => [
				'enablePrettyUrl' => true,
				'showScriptName' => false,
				'rules' => [
				],
			],
			*/
		],
		'params'     => $params,
		'aliases'    => require( __DIR__ . '/aliases.php' ),
	];

	if ( YII_ENV_DEV ) {
		// configuration adjustments for 'dev' environment
		$config['bootstrap'][]      = 'debug';
		$config['modules']['debug'] = [
			'class' => 'yii\debug\Module',
		];

		$config['bootstrap'][]    = 'gii';
		$config['modules']['gii'] = [
			'class'      => 'yii\gii\Module',
			'allowedIPs' => [ '127.0.0.1', '::1', '192.168.0.*', '192.168.178.20' ],
			'generators' => [
				'crud' => [
					'class'     => 'yii\gii\generators\crud\Generator', // generator class
					'templates' => [
						'ISNCrud' => '@isnlab/common/gii/crud',
						// template name => path to template
					],
				],
			],
		];
	}

	return $config;
