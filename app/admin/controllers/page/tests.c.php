<?php

	$this->setPageTitle('Test custom data table');
	$this->renderAdminTable(
		'test',
		[
			[
				'name' => 'test_id',
				'label' => 'ID'
			],
			[
				'name' => 'test_value',
				'label' => 'Value'
			]
		],
		'test',
		['test_id', 'test_value'],
		'test_id asc',
		null
	);
