<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Service\Service;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Di\Aop\ProceedingJoinPoint;

class IndexController extends AbstractController
{
    /**
     * @Inject
     * @var Service
     */
    public $service;


    public function rpc()
    {
        return $this->service->calcService->add(1, 2);
    }


    public function http()
    {
        return 'http return';
    }
}
