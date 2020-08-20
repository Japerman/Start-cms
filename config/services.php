<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
        * Nur Framework Service Providers...
        */
        Start\Providers\Auth::class,
        Start\Providers\Blade::class,
        Start\Providers\Database::class,
        Start\Providers\Session::class,
        Start\Providers\Cookie::class,
        Start\Providers\Log::class,
        Start\Providers\Hash::class,
        Start\Providers\Validation::class,
        Start\Providers\Mail::class,
        // Start\Providers\Cache::class,
        // Start\Providers\Translation::class,
        // Start\Providers\Pdox::class,
        // Start\Providers\Html::class,

        /*
        * Application Service Providers...
        */
        App\Providers\AppServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [

        'Auth'        => Start\Facades\Auth::class,
        'Jwt'         => Start\Facades\Jwt::class,
        'Cookie'      => Start\Facades\Cookie::class,
        'Session'     => Start\Facades\Session::class,
        'Config'      => Start\Facades\Config::class,
        'Sql'         => Start\Facades\Sql::class,
        'DB'          => Start\Facades\DB::class,
        'Hash'        => Start\Facades\Hash::class,
        'Cache'       => Start\Facades\Cache::class,
        'Log'         => Start\Facades\Log::class,
        'Validation'  => Start\Facades\Validation::class,
        'File'        => Start\Facades\File::class,
        'Mail'        => Start\Facades\Mail::class,

    ],

];
