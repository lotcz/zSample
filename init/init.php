<?php

	require_once __DIR__ . '/../../zEngine/src/zengine.php';
	$z = new zEngine(__DIR__ . '/../app/', ['app']);
	$z->mysql->initDatabase();
	$z->mysql->executeFile(__DIR__ . '/sample.sql');

/* TO DO: init users
	getenv('ZSAMPLE_ADMIN_LOGIN')
	ZSAMPLE_ADMIN_PASS=travis_admin_pass123
	ZSAMPLE_CUSTOMER_EMAIL=travis_customer
	ZSAMPLE_CUSTOMER_PASS=travis_customer_pass123
	echo "Database initialized.";
*/
