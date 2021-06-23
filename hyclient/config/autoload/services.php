<?php

return [
    'consumers' => [
        [
            'name' => 'CalculatorService',
            'service' => App\RPC\CalculatorServiceInterface::class,
            'id' => App\RPC\CalculatorServiceInterface::class,
            'protocol' => "jsonrpc",
            'load_balancer' => 'random',
            'registry' => [
                'protocol' => 'consul',
                'address' => 'http://consul:8500',
            ],
            'nodes' => [
                ['host' => 'hyserver', 'port' => 9502],
            ],
            'options' => [
                'connect_timeout' => 5.0,
                'recv_timeout' => 5.0,
                'settings' => [
                    'open_eof_split' => true,
                    'package_eof' => "\r\n",
                    // 包体最大值，若小于 Server 返回的数据大小，则会抛出异常，故尽量控制包体大小
                    'package_max_length' => 1024 * 1024 * 2,
                ],
                // 重试次数，默认值为 2
                'retry_count' => 3,
                // 重试间隔，毫秒
                'retry_interval' => 100,
                // 多路复用客户端数量
                'client_count' => 4,
                // 心跳间隔 非 numeric 表示不开启心跳
                'heartbeat' => 30,
                'pool' => [
                    'min_connections' => 1,
                    'max_connections' => 32,
                    'connect_timeout' => 10.0,
                    'wait_timeout' => 3.0,
                    'heartbeat' => -1,
                    'max_idle_time' => 60.0,
                ],
            ],
        ],
    ]
];
