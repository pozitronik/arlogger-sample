<?php

use pozitronik\arlogger\ARLogger;
use yii\web\UrlManager;

$params = require __DIR__.'/params.php';
$db = require __DIR__.'/db.php';

$config = [
	'id' => 'basic',
	'basePath' => dirname(__DIR__),
	'defaultRoute' => 'data/index',
	'bootstrap' => ['log'],
	'aliases' => [
		'@bower' => '@vendor/bower-asset',
		'@npm' => '@vendor/npm-asset',
	],
	'components' => [
		'request' => [
			// !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
			'cookieValidationKey' => 'blabla',
		],
		'user' => [
			'identityClass' => 'app\models\User',
			'enableAutoLogin' => true,
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'db' => $db,
		'urlManager' => [
			'class' => UrlManager::class,
			'enablePrettyUrl' => true,
			'showScriptName' => false
		],
	],
	'params' => $params,
];

$config['modules']['history'] = [
	'class' => ARLogger::class
];
$config['bootstrap'][] = 'history';


if (YII_DEBUG) {
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

return $config;
