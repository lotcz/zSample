<?php

	/**
	* Install all modules and application. Installation means running all sql scripts to create tables etc.
	* Run from command line: php install.php
	* db user in db module's config must have permission to create tables.
	*/

	require_once __DIR__ . '/../../zEngine/src/zengine.php';
	$z = new zEngine(__DIR__ . '/../app/', ['app']);

	$z->app->installAllModules();
	$z->db->executeFile(__DIR__ . '/sample.sql');
