<?php

class user extends MainController
{
	private $model;
	
	public function __construct()
	{
		parent::__construct();
		
		$this->model = $this->loadModel('user');
		$this->view->pageTitle ='Login';
		
	}
	
	public function login()
	{
		
		if(Session::get('loggedIn')==true)
		{
			header('location:'.BASE_URL);
		}
		$this->view->render('login/index',false);
		
	}
	
	public function authenticate()
	{
		$this->model->UserAuthenticate();
	}
	
	public function logout()
	{
		Session::destroy();
		header('location:'.BASE_URL.'user/login');
	
	}
}