<?php

declare(strict_types=1);

namespace Fibonacci\CommandModel;

class Fibonacci
{
    public function calculate(UnsignedInteger $count): NumericString
    {
        $a = '0.0';
        $b = '1.0';
    
        $i = 1;
        while ($i < $count->value) {
            $i++;
            $next = bcadd($a, $b, 0);
            $a = $b;
            $b = $next;
        }
        
        return new NumericString($b);
    }
}