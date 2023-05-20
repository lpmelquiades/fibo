<?php

declare(strict_types=1);

namespace Fibonacci\CommandModel;

use DomainException;

class UnsignedInteger
{
    function __construct(
        public readonly float $value
    ){
        if ($this->value < 0) {
            throw new DomainException(ErrorReference::INVALID_VALUE->value);
        }
    }
}