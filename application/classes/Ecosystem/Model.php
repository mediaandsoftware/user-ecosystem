<?php

abstract class Ecosystem_Model
{
	
	protected $_data = array();
	
	protected $_rules = array();
	
	//name of the database table
	protected $_table = NULL;
	
	protected $_statechanged = FALSE;
	
	public function __construct(array $data = NULL, array $rules = NULL)
	{
		
		if($data !== NULL)
		{
			$this->_data = $data;
		}
		
		if($rules !== NULL)
		{
			$this->_rules = $rules;
		}
	}
	
	public function __get($key)
	{
		
	}
	
	public function __set($key,$value)
	{
		
	}
	
	public function as_array()
	{
		
	}
	
	///Before Save Hook
	abstract protected function before_save();
	
	//After Save Hook
	abstract protected function after_save();
}