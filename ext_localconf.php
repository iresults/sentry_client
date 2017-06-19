<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TYPO3_CONF_VARS']['SYS']['devIPmask'] = '';  // show default TYPO3 error message
$GLOBALS['TYPO3_CONF_VARS']['SYS']['displayErrors'] = '0';  // don't turn errors into exceptions, use productionExceptionHandler
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_errorDLOG'] = '1';  // developer log ('devlog' extension)
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enable_exceptionDLOG'] = '1';  // developer log ('devlog' extension)
$GLOBALS['TYPO3_CONF_VARS']['SYS']['enableDeprecationLog'] = 'devlog';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLog'] = '';  // no local logging (= maximum performance)
$GLOBALS['TYPO3_CONF_VARS']['SYS']['systemLogLevel'] = '0';  // log everything
$GLOBALS['TYPO3_CONF_VARS']['SYS']['syslogErrorReporting'] = E_ALL;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['belogErrorReporting'] = E_ALL;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['errorHandler'] = 'SentryClient\\ErrorHandler';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['debugExceptionHandler'] = 'SentryClient\\DebugExceptionHandler';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['productionExceptionHandler'] = 'SentryClient\\ProductionExceptionHandler';
