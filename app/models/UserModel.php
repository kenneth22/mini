<?php

class UserModel extends BaseModel
{
	protected $db;
	
	public function __construct()
	{
		$this->db = parent::__construct();
		
	}
	
	public function UserAuthenticate()
	{
	
		
		$params  = array(':username'=>$_POST['username'],':password' =>md5($_POST['password']));
		$request = $this->db->prepare("SELECT * FROM users WHERE username=:username AND password = :password");
		$request->execute($params);
		if($request->rowCount() != 0)
		{
	
			$result = $request->fetchAll();
	
			Session::set('loggedIn',true);
			Session::set('userid',$result[0]['userid']);
			header('location:'.BASE_URL);
		}
		else
		{
			header('location:'.BASE_URL.'user/login');
			
		}
		
		
	}
	

	
}
