<?php

class Registration_Model_UserTocken extends Ecosystem_Model
{
	protected $_data = array(
			'user_id' => NULL,
			'role_id' => NULL,
			'created' => FALSE,
	);
	
	protected $_rules = array(
			'user_id' => array(
					array('not_empty'),
			),
			'role_id' => array(
					array('not_empty'),
			),
	);
	
	protected function before_save(){
	
	}
	
	function after_save(){
	
	}
}