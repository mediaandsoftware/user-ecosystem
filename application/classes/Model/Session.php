<?php

class Registration_Model_Session extends Ecosystem_Model
{
	protected $_data = array(
			'id' => NULL,
			'user_id' => NULL,
			'provider' => NULL,
			'identity' => NULL,
			'created' => FALSE,
			'updated' => FALSE,
	);
	
	protected $_rules = array(
			'user_id' => array(
					array('not_empty'),
			),
	);
	
	protected function before_save(){
	
	}
	
	function after_save(){
	
	}
}