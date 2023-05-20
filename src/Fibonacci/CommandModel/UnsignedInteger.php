<?php

declare(strict_types=1);

namespace Fibonacci\CommandModel;

class UnsignedInteger
{
    public readonly int $value;
    function __construct(
        mixed $value
    ){
        if (!is_numeric($value)) {
            throw new \LogicException(ErrorReference::INVALID_INPUT->value);
        }

        $this->value = ( intval($value) == floatval($value) )
            ? intval($value)
            : throw new \LogicException(ErrorReference::INVALID_INPUT->value);

        if ($this->value < 0) {
            throw new \LogicException(ErrorReference::INVALID_INPUT->value);
        }
    }
}