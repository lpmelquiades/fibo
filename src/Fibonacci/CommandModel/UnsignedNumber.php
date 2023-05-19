<?php

declare(strict_types=1);

namespace Fibonacci\CommandModel;

use DomainException;

class UnsignedNumber
{
    function __construct(
        public readonly float $value
    ){
        if ($this->value < 0) {
            throw new DomainException(ErrorReference::INVALID_VALUE->value);
        }
    }

    public function readable(): string
    {
        return number_format($this->value,0,'','');
    }
}