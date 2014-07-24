<?php
class MainController
{
	protected $view;
	
	
	public function __construct()
	{
		
		$this->view = new View();
		
	}
	
	public function loadModel($name)
	{
		$modelname = ucfirst($name."Model");
		return new $modelname();
	}

}