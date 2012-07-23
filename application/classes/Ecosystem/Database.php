<?php

class Ecosystem_Database
{
	protected $_db = NULL;
	
	protected $_instance;
	
	public function __construct(Database $database = NULL)
	{
		$this->_db = $database;
	}
	
	public static function getInstance(Database $database = NULL)
	{
		if($database == NULL && $this->_db ==NULL)
		{
			throw  new Ecosystem_Exception_Nullpointer("Database Instance cannot be null");
		}
		
		$this->_db = $database;
		
		if($this->_instance == NULL)
		{
			$this->_instance = new Ecosystem_Database();
		}
		return $this->_instance;
	}
	
	public function find_model(Ecosystem_Model $model){
		
	}
	
	public function list_objects($model_name,Database_Query_Builder_Select $query = NULL)
	{
		
	}
	
	public function save(Ecosystem_Model $model)
	{
		
	}
	
	public function update(Ecosystem_Model $model,Database_Query_Builder_Update $qb = NULL)
	{
		
	}
	
	public function create(Ecosystem_Model $model,Database_Query_Builder_Insert $qb = NULL)
	{
		
	}
	
	public function delete(Ecosystem_Model $model,Database_Query_Builder_delete $qb = NULL)
	{
		
	}
	
	protected function validate(Ecosystem_Model $model)
	{
		
	}
	
	public function get_count($table_name,Database_Query_Builder_Select $query = NULL)
	{
		
	}
}
