<?php

return [

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'userModel' => [
            'driver' => 'session',
            'provider' => 'userModel',
        ],

        'roomModel' => [
            'driver' => 'session',
            'provider' => 'roomModel',
        ],

    ],

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],

        'userModel' => [
            'driver' => 'eloquent',
            'model' => App\Models\userModel::class,
        ],

        'roomModel' => [
            'driver' => 'eloquent',
            'model' => App\Models\roomModel::class,
        ],
    ],

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => 10800,

];
