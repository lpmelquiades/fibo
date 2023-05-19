<?php

declare(strict_types=1);

namespace Fibonacci\Tests;

use Fibonacci\CommandModel\Fibonacci;
use Fibonacci\CommandModel\UnsignedNumber;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
    public function testManyDifferentValues()
    {
        $fibo = new Fibonacci();
        $this->assertSame(
            "55",
            $fibo->calculate(new UnsignedNumber(10))->readable()
        );

        $this->assertSame(
            "354224848179261915075",
            $fibo->calculate(new UnsignedNumber(100))->readable()
        );

    }
}