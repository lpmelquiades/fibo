<?php

declare(strict_types=1);

namespace Fibonacci\Command;

use Fibonacci\CommandModel\UnsignedNumber;

class CountFibonacci
{
    function __construct(
        public readonly UnsignedNumber $count
    ){
    }
}