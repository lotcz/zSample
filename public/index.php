<?php
	require_once '../../zEngine/src/z.php';	
	$z = new zEngine('app/');	
	$z->enableModule('app');	
	$z->run();