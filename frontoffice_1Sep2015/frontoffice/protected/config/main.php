<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>APP_NAME,
        'theme'=>'SWCS',
        'defaultController'=>'home',
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
        'ziiadmin',    
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'prepaid',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array($_SERVER['REMOTE_ADDR'],'::1'),
		),
                
            
	),
        

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'showScriptName'=>FALSE,
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		'session' => array(
			'cookieParams' => array(
				'secure' => false,
				'httponly' => true,
			),
		),
		
                 'db'=>array(
			'connectionString' => 'mysql:host='.DB_SERVER.';dbname='.DB_NAME,
			'emulatePrepare' => true,
			'username' => DB_USER,
			'password' => DB_PASS,
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
                // use 'site/error' action to display errors
                //'errorAction'=>'site/error',
                'errorAction'=>'swcsrouter',
            ),

		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),

	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);
