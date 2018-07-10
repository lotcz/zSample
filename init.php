<?php
	require_once __DIR__ . '/../zEngine/src/zengine.php';	
	$z = new zEngine(__DIR__ . '/app/');	
	$z->enableModule('mysql');
	
	$sql = file_get_contents(__DIR__ . '/../zEngine/sql/zEngine.sql');
	zSqlQuery::executeSQL($z->mysql->connection, $sql);
	
	$sql = file_get_contents(__DIR__ . '/sql/sample.sql');
	zSqlQuery::executeSQL($z->mysql->connection, $sql);

	echo "Database initialized.";