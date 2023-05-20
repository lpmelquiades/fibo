<?php

declare(strict_types=1);

namespace Fibonacci\Command;

use Fibonacci\CommandModel\NumericString;

class CountFibonacciResult
{
    function __construct(
        public readonly NumericString $result
    ){
    }
}