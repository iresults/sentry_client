<?php

namespace SentryClient;

class DebugExceptionHandler extends \TYPO3\CMS\Core\Error\DebugExceptionHandler
{
    /**
     * Displays the given exception
     *
     * @param \Exception|\Throwable $exception The exception(PHP 5.x) or throwable(PHP >= 7.0) object.
     *
     * @throws \Exception
     */
    public function handleException(\Throwable $exception)
    {
        ClientProvider::captureException($exception);

        parent::handleException($exception);
    }
}
