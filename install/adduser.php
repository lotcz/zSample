<?php

  /**
  * Create application admin and/or common user (visitor)
  * Run from command line: php adduser.php --visitor_email=test@test.com --visitor_password=pass --admin_email=admin@test.com --admin_password=pass
  */

	require_once __DIR__ . '/../../zEngine/src/zengine.php';
	$z = new zEngine(__DIR__ . '/../app/', ['app']);

	$options = getopt('v:p:a:w:', ['visitor_email::', 'visitor_password::', 'admin_email::', 'admin_password::']);

  if (isset($options['visitor_email'])) {
    $z->auth->createActiveUser("Auto-created test user", $options['visitor_email'], $options['visitor_email'], $options['visitor_password']);
  }

  if (isset($options['admin_email'])) {
    $z->admin->createActiveAdminAccount($options['admin_email'], $options['admin_email'], $options['admin_email'], $options['admin_password']);
  }
