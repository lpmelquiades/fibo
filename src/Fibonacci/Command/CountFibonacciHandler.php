<?php

declare(strict_types=1);

namespace Fibonacci\Command;

use Fibonacci\CommandModel\Fibonacci;

class CountFibonacciHandler
{
    function __construct(
    ){
    }

    function handle(CountFibonacci $command): CountFibonacciResult
    {
        $fibo = new Fibonacci();
        return new CountFibonacciResult(
            $fibo->calculate($command->count)
        );
    } 
}