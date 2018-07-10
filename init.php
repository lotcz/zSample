<?php
	require_once __DIR__ . '/../zEngine/src/zengine.php';	
	$z = new zEngine(__DIR__ . '/app/');	
	$z->enableModule('mysql');

	$db = $z->mysql->connection;

	$sql = file_get_contents(__DIR__ . '/../zEngine/sql/zEngine.sql');
	$db->multi_query($sql);
	
	$sql = file_get_contents(__DIR__ . '/sql/sample.sql');
	$db->multi_query($sql);

	echo "Database initialized.";