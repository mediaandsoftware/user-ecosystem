<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(
	'default' => array(
		'type'       => 'MySQL',
		'connection' => array(
			// @TODO change this to be project-specific
			'hostname'   => 'localhost',
			'username'   => 'root',
			'password'   => 'root',
			'database'   => 'user_collection',
			'persistent' => FALSE,
		),
		'table_prefix' => '',
		'charset'      => 'utf8',
		'caching'      => TRUE,
		'profiling'    => FALSE,
	),
);
