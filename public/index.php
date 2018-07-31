<?php
	require_once '../../zEngine/src/zengine.php';	
	$z = new zEngine('../app/');	
	$z->enableModule('app');	
	$z->run();