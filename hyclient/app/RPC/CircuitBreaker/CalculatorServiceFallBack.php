<?php


namespace App\RPC\CircuitBreaker;


class CalculatorServiceFallBack
{
    public function add(int $num1, int $num2): int
    {
        return 0;
    }
}