<?php

declare(strict_types=1);

namespace Fibonacci\Command;

use Fibonacci\CommandModel\UnsignedNumber;

class CountFibonacciResult
{
    function __construct(
        public readonly UnsignedNumber $result
    ){
    }
}