<?php

	define('DS',DIRECTORY_SEPARATOR);
	define('ROOT',dirname(dirname(__FILE__)) . DS . 'mini');

	
	require_once(ROOT . DS . 'app'. DS .'libs' . DS .'Bootstrap.php');
	require_once(ROOT . DS . 'app'. DS .'config' . DS .'config.php');
	
	
	if (defined('ENVIRONMENT'))
	{
		switch (ENVIRONMENT)
		{
			case 'development':
				error_reporting(E_ALL);
				
			break;
		
			case 'testing':
			case 'production':
				error_reporting(0);
			
			break;

			default:
				exit('The application environment is not set correctly.');
		}
	}

	$app = new Bootstrap();

	

	
	
