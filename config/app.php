<?php

return [
    'id'         => 'pusher',
    'env'        => env('APP_ENV', 'prod'),
    'debug'      => env('APP_DEBUG', false),
    'version'    => '1.1.1',
    'timezone'   => 'PRC',
    'master_key' => env('MASTER_KEY'),
    'params'     => [],
    'aliases'    => [
    ],
    'components' => [
        'wsServer' => ['port'                     => 9501,
                       'worker_num'               => 4,
                       'heartbeat_check_interval' => 60,
                       'heartbeat_idle_time'      => 300],
        'db'       => [env('DB_URL')],
        'redis'    => [env('REDIS_URL')],
        'logger'   => ['level' => env('LOGGER_LEVEL', 'info')],
        'wspServer' => ['endpoint' => 'admin'],
        'wspClient' => ['endpoint' => 'admin'],
    ],
    'plugins'    => [],
    'tracers'    => env('APP_TRACERS', []),
];
