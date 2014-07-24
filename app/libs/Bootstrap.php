<?php

class Bootstrap
{

	private $controller;
	private $className;
	private $methodName;
	
	public function __construct($route = true)
	{
				
			//register to the AutoLoad function 
			spl_autoload_register(array($this,'AutoLoader'));
			
			Session::init();
			if($route){
				$router = new Router($_SERVER['REQUEST_URI']);
			}
		
	}

	//autoload function
	public function AutoLoader($className)
	{
		//crate an array of possible locations of the classfiles
		$locations = array( ROOT . DS . 'app'. DS .'controllers' . DS,
							ROOT . DS . 'app'. DS .'models' . DS,
							ROOT . DS . 'app'. DS .'config' . DS,
							ROOT . DS . 'app'. DS .'libs' . DS,
							ROOT . DS . 'app'. DS .'views' . DS,						
					);
		
		// use the require function to get the needed classfile
		foreach($locations as $path){
				if(file_exists($path .$className.'.php')){
		
					require $path .$className.'.php';
					return true;
				}
		}				
		
	
	}
		
	
	
	
}