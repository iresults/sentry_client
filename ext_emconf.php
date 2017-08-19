<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Sentry Client',
	'description' => 'Sentry Client for TYPO3 - https://www.getsentry.com/',
	'category' => 'services',
	'version' => '1.1.0',
	'state' => 'beta',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Christoph Lehmann',
	'author_email' => 'christoph.lehmann@networkteam.com',
	'author_company' => 'networkteam GmbH',
	'constraints' => [
		'depends' => [
			'typo3' => '6.2.0-7.9.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
