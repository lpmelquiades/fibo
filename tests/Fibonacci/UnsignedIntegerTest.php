<?php

declare(strict_types=1);

namespace Fibonacci\Tests;

use Fibonacci\CommandModel\ErrorReference;
use Fibonacci\CommandModel\UnsignedInteger;
use PHPUnit\Framework\TestCase;

class UnsignedIntegerTest extends TestCase
{
    public function testWhenValueNotNumeric()
    {
        $this->expectExceptionMessage(ErrorReference::INVALID_INPUT->value);
        new UnsignedInteger(-456);
    }
}