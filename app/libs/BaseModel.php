<?php
abstract class BaseModel 
{
	protected $db;
	private $whmusername;
	private $whmhash;
	private $whmQuery;
	private $header;
	
	public function __construct()
	{
		$this->db = new Database;		
		$this->header = array();
	
		return $this->db;
	}
	// PUT ALL OTHER BASE FUNCTIONS HERE
	
}
