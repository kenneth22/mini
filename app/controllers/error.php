<?php

class Error extends MainController
{
	public function  indexAction()
	{
		parent::__construct();
	}
		
	public function Display404(){
	
		$this->view->msg = '404 Error';
		$this->view->render('error/index',false);
	}
	
}
