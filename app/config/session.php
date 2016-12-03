<?php

return [
    'default' => env('SESSION_DRIVER'),

    'drivers' => [

        'memcache' => [
            'adapter'    => 'Memcache',
            'host'       => env('MEMCACHED_HOST', '127.0.0.1'),
            'port'       => env('MEMCACHED_PORT', 11211),
            'persistent' => true,
        ],

        'memcached' => [
            'adapter' => 'Libmemcached',
            'servers' => [
                'host'   => env('MEMCACHED_HOST', '127.0.0.1'),
                'port'   => env('MEMCACHED_PORT', 11211),
                'weight' => env('MEMCACHED_WEIGHT', 100),
            ],
        ],

        'redis' => [
            'adapter'    => 'Redis',
            'host'       => env('REDIS_HOST', '127.0.0.1'),
            'port'       => env('REDIS_PORT', 6379),
            'index'      => env('REDIS_INDEX', 0),
            'persistent' => true,
        ],

        'file' => [
            'adapter'  => 'Files',
        ],
    ],

    'prefix'   => 'forum_session_',

    'uniqueId' => substr(md5(env('APP_PROJECT', 'Phalcon')), 0, 16) . '_',

    'lifetime' => env('SESSION_LIFETIME', 3600),
];
