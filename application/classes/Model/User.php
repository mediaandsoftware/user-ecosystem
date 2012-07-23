<?php

class Registration_Model_User extends Ecosystem_Model
{
	
	protected $_data = array(
			'id' => NULL,
			'email' => NULL,
			'username' => NULL,
			'password' => NULL,
			'firstname' => NULL,
			'lastname' => NULL,
			'middlename' => NULL,
			'active' => FALSE,
			'last_login' => NULL,
			'reset_token' => NULL,
			'last_failed_login' => NULL,
			'created' => FALSE,
			'updated' => FALSE,
	);
	
	protected $_rules = array(
			'email' => array(
					array('not_empty'),
					array('email'),
			),
			'username' => array(
					array('not_empty'),
			),
			'password' => array(
					array('not_empty'),
			),
			'firstname' => array(
					array('not_empty'),
			),
	);
	
	protected function before_save(){
		
	}
	
	function after_save(){
		
	}
}