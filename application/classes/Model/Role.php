<?php

class Registration_Model_Role extends Ecosystem_Model
{
	protected $_data = array(
			'id' => NULL,
			'name' => NULL,
			'description' => NULL,
			'created' => FALSE,
			'updated' => FALSE,
	);
	
	protected $_rules = array(
			'name' => array(
					array('not_empty'),
			),
	);
	
	protected function before_save(){
	
	}
	
	function after_save(){
	
	}
}