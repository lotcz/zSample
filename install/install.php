<?php

	require_once __DIR__ . '/../../zEngine/src/zengine.php';
	$z = new zEngine(__DIR__ . '/../app/', ['app']);

	$options = getopt('r:q:v:p:a:w:', ['root_login::', 'root_password::', 'visitor_email::', 'visitor_password::', 'admin_email::', 'admin_password::']);

	$root_login = null;
	$root_password = null;
	if (isset($options['root_login'])) {
		$root_login = $options['root_login'];
		$root_password = $options['root_password'];
	}

	$z->app->installAllModules();
	$z->db->executeFile(__DIR__ . '/sample.sql');

	// init users

	if (isset($options['visitor_email'])) {
		$z->auth->createActiveUser("Auto-created test user", $options['visitor_email'], $options['visitor_email'], $options['visitor_password']);
	}
	if (isset($options['admin_login'])) {
		$z->admin->createActiveAdminAccount($options['admin_email'], $options['admin_email'], $options['admin_email'], $options['admin_password']);
	}
