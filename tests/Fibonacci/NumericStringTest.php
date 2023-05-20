<?php

declare(strict_types=1);

namespace Fibonacci\Tests;

use Fibonacci\CommandModel\ErrorReference;
use Fibonacci\CommandModel\NumericString;
use PHPUnit\Framework\TestCase;

class NumericStringTest extends TestCase
{
    public function testWhenValueNotNumeric()
    {
        $this->expectExceptionMessage(ErrorReference::INVALID_INPUT->value);
        new NumericString("abc");
    }
}