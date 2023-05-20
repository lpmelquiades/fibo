<?php

declare(strict_types=1);

namespace Fibonacci\Command;

use Fibonacci\CommandModel\UnsignedInteger;

class CountFibonacci
{
    function __construct(
        public readonly UnsignedInteger $count
    ){
    }
}