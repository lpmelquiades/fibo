<?php

declare(strict_types=1);

namespace Fibonacci\CommandModel;

class UnsignedInteger
{
    function __construct(
        public readonly int $value
    ){
        if ($this->value < 0) {
            throw new \LogicException(ErrorReference::INVALID_VALUE->value);
        }
    }
}