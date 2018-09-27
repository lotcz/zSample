<?php
	require_once __DIR__ . '/../../../models/test.m.php';

	$this->renderAdminForm(
		'TestModel',
		[
			[
				'name' => 'test_value',
				'label' => 'Value',
				'type' => 'text'
			]
		]
	);
