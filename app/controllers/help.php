<?php

class help extends MainController
{
	
	public function indexAction()
	{
		parent::__construct();
		$this->view->msg='THIS IS HELP';
		$this->view->render('help/index');
	
		
	}

	public function test($arg = false){
		echo "<br/>Test Help";
		echo "<br/>Arg:".$arg;
	}
}