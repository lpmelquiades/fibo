<?php

declare(strict_types=1);

namespace Fibonacci\CommandModel;

use DomainException;

class NumericString
{
    function __construct(
        public readonly string $value
    ){
        if (!is_numeric($this->value)) {
            throw new DomainException(ErrorReference::INVALID_VALUE->value);
        }
    }
}