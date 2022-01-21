<?php
	require_once __DIR__ . '/../../../models/test.m.php';

	$this->renderAdminForm(
		'TestModel',
		[
			[
				'name' => 'test_id',
				'label' => 'ID',
				'type' => 'text'
			],
			[
				'name' => 'test_value',
				'label' => 'Value',
				'type' => 'text'
			]
		],
		null, //before update
		null, //after update
		null, //before delete
		null //after delete
	);
