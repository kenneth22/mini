<?php

class Router
{
	private $controller;
	private $method;
	private $args;
	private $query;
	private $securityCheck;
	
	public function __construct($request = null)
	{
		$met = "";
		$con = "";
		
		$this->securityCheck = array( 'index',  // serves as the filters for the only accessible controllers
									  'user',
									  'help');
									 
		$this->query= array();
		$this->args= array();
		$this->query =  explode('/',$request);
		
		array_shift($this->query); //extra array_shift if inside a folder	
		array_shift($this->query); //extra array_shift if inside a folder	
		
		$this->controller = ($con = array_shift($this->query)) != "" ?trim(urldecode(str_replace(chr(0),"",$con))) : 'index';
		$this->method = ($met = array_shift($this->query)) != "" ? trim(urldecode(str_replace(chr(0),"",$met))) : 'indexAction';
		$this->args = $this->query;
		
		if(class_exists($this->controller) && method_exists($this->controller,$this->method) && in_array($this->controller,$this->securityCheck))
		{
			$this->controller = new $this->controller;
			call_user_func_array(array($this->controller,$this->method),$this->args);
		}
		else
		{
			$this->error();
		
		}
		
	}
		

	
	
	public function error()
	{
		$error = new error();
		$error->Display404();
	
	}

	
	
}	