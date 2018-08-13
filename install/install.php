<?php

	require_once __DIR__ . '/../../zEngine/src/zengine.php';
	$z = new zEngine(__DIR__ . '/../app/', ['app']);
	$z->app->installAllModules();
	$z->db->executeFile(__DIR__ . '/sample.sql');

	// init users
	$options = getopt('v:p:a:w:', ['visitor_email::', 'visitor_password::', 'admin_email::', 'admin_password::']);
	if (isset($options['visitor_email'])) {
		$z->auth->createActiveUser("Auto-created test user", $options['visitor_email'], $options['visitor_email'], $options['visitor_password']);
	}
	if (isset($options['admin_login'])) {
		$z->admin->createActiveAdminAccount($options['admin_email'], $options['admin_email'], $options['admin_email'], $options['admin_password']);
	}
