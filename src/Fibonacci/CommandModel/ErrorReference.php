<?php

declare(strict_types=1);

namespace Fibonacci\CommandModel;

enum ErrorReference: string
{
    case INVALID_INPUT = 'INVALID_INPUT';
}