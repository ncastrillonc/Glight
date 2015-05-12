<?php
 
class user extends object_standard
{
	//Holi soy un user
	protected $id;
	protected $name;
	protected $user;
	protected $password;
	protected $type;
	protected $correillo;
	protected $ciudadania;
	
	//components
	var $components = array();
	
	//auxiliars for primary key and for files
	var $auxiliars = array();
	
	//data about the attributes
	public function metadata()
	{
		return array("id" => array(), "name" => array(), "user" => array(), "password" => array(), "type" => array(), "email" => array()); 
	}

	public function primary_key()
	{
		return array("id");
	}
	
	public function relational_keys($class, $rel_name)
	{
		switch($class)
		{		
		    default:
			break;
		}
	}
}

?>