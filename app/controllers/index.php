<?php

class index extends MainController
{
	protected $msg;
	private $result;
	
	public function __construct()
	{
			parent::__construct();
		
			if(Session::get('loggedIn') !=true)
			{
				Session::destroy();
				header('location:'.BASE_URL .'user/login');
				
			}
		$this->model = $this->loadModel('index');
		$this->view->pageTitle ='Breezego Server Informatics';
		
			
	}
	
	public function indexAction()
	{
		//$this->view->msg = "WELCOME TO HOME";
		$this->view->render('home/index');

		
	}
	

}