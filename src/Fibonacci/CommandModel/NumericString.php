<?php

declare(strict_types=1);

namespace Fibonacci\CommandModel;

class NumericString
{
    function __construct(
        public readonly string $value
    ){
        if (!is_numeric($this->value)) {
            throw new \LogicException(ErrorReference::INVALID_INPUT->value);
        }
    }
}