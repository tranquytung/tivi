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

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],
        //khai bao xac thuc cho admin

        'admin' => [
            'driver' => 'session',
            'provider' => 'admins',
        ],
        'user1' => [
            'driver' => 'session',
            'provider' => 'user1',
        ]
    ],
    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\User::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],

        'admins' =>[
            'driver'=> 'eloquent',
            'model' => App\Admin::class,
        ],
        'user1' =>[
            'driver'=> 'eloquent',
            'model' => App\Users::class,
        ]

    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one users table or model in the application and you want to have
    | separate password reset settings based on the specific users types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],

];
