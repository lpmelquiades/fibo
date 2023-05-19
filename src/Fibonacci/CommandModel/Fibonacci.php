<?php

declare(strict_types=1);

namespace Fibonacci\CommandModel;

class Fibonacci
{
    public function calculate(UnsignedNumber $count): UnsignedNumber
    {
        $a = 0.0;
        $b = 1.0;
    
        $i = 1;
        while ($i < $count->value) {
            $i++;
            $next = $a + $b;
            $a = $b;
            $b = $next;
        }
        
        return new UnsignedNumber($b);
    }
}