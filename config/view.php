<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Template Engine [EXPERIMENTAL]
    |--------------------------------------------------------------------------
    |
    | Leaf MVC unlike other frameworks tries to give you as much control as
    | you need. As such, you can decide which view engine to use.
    |
    */
    'viewEngine' => \Leaf\Blade::class,

    /*
    |--------------------------------------------------------------------------
    | Custom config method
    |--------------------------------------------------------------------------
    |
    | Configuration for your templating engine.
    |
    */
    'config' => function ($config) {
        \Leaf\Config::get('views.blade')->configure($config['views'], $config['cache']);
    },

    /*
    |--------------------------------------------------------------------------
    | Custom render method
    |--------------------------------------------------------------------------
    |
    | This render method is triggered whenever render() is called
    | in your app if you're using a custom view engine.
    |
    */
    'render' => null,
];
