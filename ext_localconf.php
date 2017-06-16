<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$TYPO3_CONF_VARS['SYS']['devIPmask'] = '';  // show default TYPO3 error message
$TYPO3_CONF_VARS['SYS']['displayErrors'] = '0';  // don't turn errors into exceptions, use productionExceptionHandler
$TYPO3_CONF_VARS['SYS']['enable_errorDLOG'] = '1';  // developer log ('devlog' extension)
$TYPO3_CONF_VARS['SYS']['enable_exceptionDLOG'] = '1';  // developer log ('devlog' extension)
$TYPO3_CONF_VARS['SYS']['enableDeprecationLog'] = 'devlog';
$TYPO3_CONF_VARS['SYS']['systemLog'] = '';  // no local logging (= maximum performance)
$TYPO3_CONF_VARS['SYS']['systemLogLevel'] = '0';  // log everything
$TYPO3_CONF_VARS['SYS']['syslogErrorReporting'] = E_ALL;
$TYPO3_CONF_VARS['SYS']['belogErrorReporting'] = E_ALL;
$TYPO3_CONF_VARS['SYS']['errorHandler'] = 'SentryClient\\ErrorHandler';
$TYPO3_CONF_VARS['SYS']['debugExceptionHandler'] = 'SentryClient\\DebugExceptionHandler';
$TYPO3_CONF_VARS['SYS']['productionExceptionHandler'] = 'SentryClient\\ProductionExceptionHandler';
