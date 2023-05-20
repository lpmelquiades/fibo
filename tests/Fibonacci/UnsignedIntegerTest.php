<?php

declare(strict_types=1);

namespace Fibonacci\Tests;

use Fibonacci\CommandModel\ErrorReference;
use Fibonacci\CommandModel\UnsignedInteger;
use PHPUnit\Framework\TestCase;

class UnsignedIntegerTest extends TestCase
{
    public function testWhenValueIsNotNumeric()
    {
        $this->expectExceptionMessage(ErrorReference::INVALID_INPUT->value);
        new UnsignedInteger("asdadsasd");
    }

    public function testWhenValueIsNegative()
    {
        $this->expectExceptionMessage(ErrorReference::INVALID_INPUT->value);
        new UnsignedInteger(-123321);
    }

    public function testWhenValueIsDecimal()
    {
        $this->expectExceptionMessage(ErrorReference::INVALID_INPUT->value);
        new UnsignedInteger(-123321.123);
    }

    public function testWhenValueValid()
    {
        $num = new UnsignedInteger(23321);
        $this->assertSame($num->value, 23321);
    }
}