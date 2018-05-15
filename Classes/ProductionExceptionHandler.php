<?php

namespace SentryClient;

class ProductionExceptionHandler extends \TYPO3\CMS\Core\Error\ProductionExceptionHandler
{
    /**
     * @param \Exception|\Throwable $exception
     */
    public function handleException(\Throwable $exception)
    {
        ClientProvider::captureException($exception);

        parent::handleException($exception);
    }
}
