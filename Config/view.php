<?php

return [
    /*
    |--------------------------------------------------------------------------
    | View Storage Paths
    |--------------------------------------------------------------------------
    |
    | Most templating systems load templates from disk. Here you may specify
    | an array of paths that should be checked for your views. Of course
    | the usual LeafMVC view path has already been registered for you.
    |
    */
    "views_path" => views_path(),

    /*
    |--------------------------------------------------------------------------
    | Compiled View Path
    |--------------------------------------------------------------------------
    |
    | This option determines where all the compiled Blade templates will be
    | stored for your application. Typically, this is within the storage
    | directory. However, as usual, you are free to change this value.
    |
    */
    "cache_path" => storage_path('framework/views'),
    
    /*
    |--------------------------------------------------------------------------
    | Template Engine [EXPERIMENTAL]
    |--------------------------------------------------------------------------
    |
    | Leaf MVC unlike other frameworks tries to give you as much control as
    | you need. As such, you can decide which view engine to use.
    |
    */
    "view_engine" => \Leaf\Blade::class,

    /*
    |--------------------------------------------------------------------------
    | Custom render method [EXPERIMENTAL]
    |--------------------------------------------------------------------------
    |
    | This render method is triggered whenever render() is called
    | in your app if you're using a custom view engine.
    |
    */
    "render" => function(string $view, array $data = []) {
        $veins = new \Leaf\Veins\Template;
        $veins->configure([
            "veins_dir" => views_path(null, false),
            "cache_dir" => storage_path('framework/views/'),
        ]);
        $veins->set($data);
        $veins->render($view);

        // This example is what veins would look like
    },
];
