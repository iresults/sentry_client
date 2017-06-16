Sentry Client for TYPO3
=======================

A TYPO3 extension for exception logging with Sentry, https://www.sentry.io

Logs frontend errors and exceptions to your Sentry instance. Note that logging
backend issues is not yet supported by TYPO3 (it's on the todo list for v9,
according to core developer Markus Klein).

Based on the official Sentry PHP client,
[`sentry/sentry`](https://packagist.org/packages/sentry/sentry).

Installation
------------

1. Add something like this to your project's `composer.json`, and run
   `composer install`:

``` json
  "repositories": [
    {
      "type": "composer",
      "url": "https://packagist.org/"
    },
    {
      "url": "https://github.com/comsolit/sentry_client.git",
      "type": "git"
    }
  ],
  "minimum-stability": "dev",
  "require": {
    "comsolit/sentry_client": "dev-master"
  }
```

2. Make sure your `typo3conf/LocalConfiguration.php` contains something like
   this in the `SYS` section:

``` php
    'SYS' => [
        // ...
        'devIPmask' => '',
        'displayErrors' => '0',
        'enable_errorDLOG' => '1',
        'enable_exceptionDLOG' => '1',
        'enableDeprecationLog' => 'devlog',
        'systemLog' => '',
        'systemLogLevel' => '0',
        'syslogErrorReporting' => E_ALL,
        'belogErrorReporting' => E_ALL,
        'errorHandler' => 'SentryClient\\ErrorHandler',
        'debugExceptionHandler' => 'SentryClient\\DebugExceptionHandler',
        'productionExceptionHandler' => 'SentryClient\\ProductionExceptionHandler',
    ]
```
Alternatively, you can [set those values](
https://github.com/comsolit/sentry_client/blob/master/ext_localconf.php#L6-L17)
via the `Install Tool` or in `typo3conf/AdditionalConfiguration.php`.

Configuration
-------------

Set the dsn (e.g. `http://public_key:secret_key@your-sentry-server.com/project-id`)
in the `Extension Manager`.

NOTE: This will be added in your `typo3conf/LocalConfiguration.php` file at:

``` php
'EXT' => [
    'extConf' => [
        'sentry_client' => ...
```

Development
-----------

Your contributions are welcome! Please fork the repo, make your changes, and
[open a pull request](https://github.com/comsolit/sentry_client/pulls).
