<?php

namespace App\RPC;

interface CalculatorServiceInterface
{
    public function add(int $num1, int $num2): int;
}
