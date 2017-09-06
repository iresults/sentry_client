Sentry Client for TYPO3
=======================

A TYPO3 extension for PHP exception logging with Sentry, https://www.sentry.io

Logs frontend PHP errors and exceptions to your Sentry instance. Note that
logging backend issues is not yet supported by TYPO3 (it's on the todo list
for v9, according to core developer Markus Klein).

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
        'exceptionalErrors' => E_RECOVERABLE_ERROR | E_USER_DEPRECATED,
        'errorHandlerErrors' => E_WARNING | E_USER_ERROR | E_USER_WARNING | E_USER_NOTICE | E_RECOVERABLE_ERROR | E_DEPRECATED | E_USER_DEPRECATED,
        'errorHandler' => 'SentryClient\\ErrorHandler',
        'debugExceptionHandler' => 'SentryClient\\DebugExceptionHandler',
        'productionExceptionHandler' => 'SentryClient\\ProductionExceptionHandler',
    ]
```
Alternatively, you can [set those values](
https://github.com/comsolit/sentry_client/blob/master/ext_localconf.php#L6-L19)
via the `Install Tool` or in `typo3conf/AdditionalConfiguration.php`.

Configuration
-------------

Set the [Sentry DSN](https://docs.sentry.io/quickstart/#about-the-dsn)
(e.g. `https://public_key:secret_key@your-sentry-server.com/project-id`)
in the `Extension Manager`.

This will be added in your `typo3conf/LocalConfiguration.php` file at:

``` php
'EXT' => [
    'extConf' => [
        'sentry_client' => ...
```

NOTE: For professional deployments you should consider using something like
[phpdotenv](https://packagist.org/packages/vlucas/phpdotenv) to manage your
secrets instead of using the Extension Manager, and leave your
`LocalConfiguration` under version control.

JavaScript Error Logging
------------------------

For logging your JavaScript errors to Sentry see the [JavaScript Sentry docs](
https://docs.sentry.io/clients/javascript/).

If you include your JavaScript sources via TypoScript it can be handy to avoid
hard-coding and define a `SENTRY_DSN_PUBLIC` value in your system environment
(e.g. via a `.env` file read by [phpdotenv](https://packagist.org/packages/vlucas/phpdotenv)).
You can read the value in TypoScript using the [`getenv` command](
https://docs.typo3.org/typo3cms/TyposcriptReference/DataTypes/Gettext/Index.html#getenv)
like this:

``` typo3_typoscript
page.headerData {
  999 = COA
  999 {
    10 = TEXT
    10.value = <script src="https://cdn.ravenjs.com/3.16.0/raven.min.js" crossorigin="anonymous"></script>
    20 = TEXT
    20.value = <script>Raven.config('
    30 = TEXT
    30.data = getenv : SENTRY_DSN_PUBLIC
    30.stdWrap.wrap = |
    40 = TEXT
    40.value = ', {release: '
    50 = TEXT
    50.data = getenv : PROJECT_VERSION
    50.stdWrap.wrap = |
    60 = TEXT
    60.value = '}).install();</script>
  }
}
```

Development
-----------

Your contributions are welcome! Please fork the repo, make your changes, and
[open a pull request](https://github.com/comsolit/sentry_client/pulls).
