<?php

declare(strict_types=1);

/*
 * This file is part of PHP Exceptions.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Exceptions\Runtime\Http;

use BrianFaust\Exceptions\Standards\RuntimeException;

class RequestTimeoutException extends RuntimeException
{
    public function __construct(?string $message, ?string $errorCode = 'ERR-REQUEST-TIMEOUT')
    {
        parent::__construct($message, $errorCode, 408);
    }
}
