<?php

namespace App\RPC;

use Hyperf\CircuitBreaker\Annotation\CircuitBreaker;
use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="CalculatorService", server="jsonrpc", protocol="jsonrpc", publishTo="consul")
 */
class CalculatorService implements CalculatorServiceInterface
{
    /**
     * @CircuitBreaker(timeout="3", failCounter=5,successCounter=1, fallback="App\RPC\CircuitBreaker\CalculatorServiceFallBack::add")
     * @param int $num1
     * @param int $num2
     * @return int
     */
    public function add(int $num1, int $num2): int
    {
        return $num1 + $num2;
    }
}
