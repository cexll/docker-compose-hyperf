<?php


namespace App\Service;


use App\RPC\CalculatorServiceInterface;
use Psr\Container\ContainerInterface;

class Service
{
    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @var CalculatorServiceInterface
     */
    public $calcService;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->calcService = $this->container->get(CalculatorServiceInterface::class);
    }


}