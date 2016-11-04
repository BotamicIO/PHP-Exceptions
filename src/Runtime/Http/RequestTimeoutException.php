<?php

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class RequestTimeoutException extends RuntimeException
{
    public function __construct($message = null, $errorCode = 'ERR-REQUEST-TIMEOUT')
    {
        parent::__construct($message, $errorCode, 408);
    }
}