<?php

$EM_CONF[$_EXTKEY] = [
	'title' => 'Sentry Client',
	'description' => 'TYPO3 extension for PHP error and exception logging with Sentry, https://sentry.io',
	'category' => 'services',
	'version' => '1.3.0',
	'state' => 'beta',
	'uploadfolder' => false,
	'createDirs' => '',
	'clearcacheonload' => true,
	'author' => 'Christoph Lehmann',
	'author_email' => 'christoph.lehmann@networkteam.com',
	'author_company' => 'networkteam GmbH',
	'constraints' => [
		'depends' => [
			'typo3' => '6.2.0-8.9.99',
		],
		'conflicts' => [],
		'suggests' => [],
	],
];
