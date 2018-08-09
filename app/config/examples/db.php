<?php

	return [
		'connection_type' => 'mysql',
		'hostname' => 'localhost',
		'user' => 'root',
		'password' => '',
		'database' => 'zsample',
		'charset' => 'UTF8',
		'options' => array(
		    PDO::ATTR_PERSISTENT => true,
				PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
		)
	];
