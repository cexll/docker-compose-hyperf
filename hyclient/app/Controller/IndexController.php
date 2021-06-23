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

use Hyperf\Di\Annotation\Inject;
use App\RPC\CalculatorServiceInterface;
use Hyperf\HttpServer\Annotation\AutoController;

#[AutoController]
class IndexController extends AbstractController
{
    /**
     * @var CalculatorServiceInterface
     */
    #[Inject()]
    public $calcService;


    public function rpc()
    {
        return $this->calcService->add(100, 300);
    }


    public function http()
    {
        return 'http return';
    }
}
