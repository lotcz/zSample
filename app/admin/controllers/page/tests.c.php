<?php

	$this->setPageTitle('Test custom data table');
	$this->renderAdminTable(
	'test',
	'test',
	[
		[
			'name' => 'test_id',
			'label' => 'ID'
		],
		[
			'name' => 'test_value',
			'label' => 'Value'
		],
	]
);
