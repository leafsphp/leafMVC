<?php

/*
|--------------------------------------------------------------------------
| App Config
|--------------------------------------------------------------------------
|
| This file contains the configuration for your app. Most of this
| configuration is for Leaf's core but has been made available
| to you for your convenience.
|
| You can link your environment variables to this file by using the
| _env() helper function. This function will return the value set in
| your .env file. You can use the below settings as a reference.
|
*/

return [
    /*
    |--------------------------------------------------------------------------
    | Place app in maintainance mode
    |--------------------------------------------------------------------------
    |
    | Replacement for earlier mode=down. You can set this to true to place
    | your app in a maintainance like state. It will display Leaf's default
    | app down page if a custom handler is not set.
    |
    | See: https://leafphp.dev/docs/config/settings.html#app-down
    |
    */
    'app.down' => _env('APP_DOWN', false),

    /*
    |--------------------------------------------------------------------------
    | App debugging
    |--------------------------------------------------------------------------
    |
    | If debugging is enabled, Leaf will use its built-in error handler to
    | display diagnostic information for uncaught Exceptions, else it will
    | display a bare error page usable in production. You can set a
    | custom error page to display using `$app->setError`.
    |
    | You might want to turn this off in production.
    |
    */
    'debug' => _env('APP_DEBUG', true),

    /*
    |--------------------------------------------------------------------------
    | HTTP Version
    |--------------------------------------------------------------------------
    |
    | By default, Leaf returns an HTTP/1.1 response to the client.
    | Use this setting if you need to return an HTTP/1.0 response.
    |
    */
    'http.version' => '1.1',

    /*
    |--------------------------------------------------------------------------
    | Log directory
    |--------------------------------------------------------------------------
    |
    | This tells leaf which directory to save and look for logs.
    |
    */
    'log.dir' => 'storage/logs/',

    /*
    |--------------------------------------------------------------------------
    | Log Enabled
    |--------------------------------------------------------------------------
    |
    | This enables or disables Leaf’s logger. Note that if log.enabled is
    | set to false. Leaf will skip initializing anything related to logs,
    | as such, you won't have access to $app->logger(),
    | $app->log or $app->logWriter.
    |
    */
    'log.enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Log file
    |--------------------------------------------------------------------------
    |
    | This setting tells leaf which file to write logs to.
    |
    */
    'log.file' => 'app.log',

    /*
    |--------------------------------------------------------------------------
    | Log level
    |--------------------------------------------------------------------------
    |
    | Leaf has these log levels:
    |
    | - \Leaf\Log::EMERGENCY
    | - \Leaf\Log::ALERT
    | - \Leaf\Log::CRITICAL
    | - \Leaf\Log::ERROR
    | - \Leaf\Log::WARN
    | - \Leaf\Log::NOTICE
    | - \Leaf\Log::INFO
    | - \Leaf\Log::DEBUG
    |
    */
    'log.level' => \Leaf\Log::DEBUG,

    /*
    |--------------------------------------------------------------------------
    | Log open
    |--------------------------------------------------------------------------
    |
    | Takes in a boolean and determines whether Leaf should create
    | the specified log file if it doesn't exist.
    |
    */
    'log.open' => true,

    /*
    |--------------------------------------------------------------------------
    | Log writer
    |--------------------------------------------------------------------------
    |
    | Use a custom log writer to direct logged messages
    | to the appropriate output destination.
    |
    */
    'log.writer' => null,

    /*
    |--------------------------------------------------------------------------
    | Mode
    |--------------------------------------------------------------------------
    |
    | This is an identifier for the application’s current mode of operation.
    | The mode does not affect a Leaf application’s internal functionality.
    |
    */
    'mode' => 'development',

    /*
    |--------------------------------------------------------------------------
    | Views path
    |--------------------------------------------------------------------------
    |
    | The relative or absolute path to the filesystem directory that
    | contains your Leaf application’s view files.
    |
    */
    'views.path' => ViewsPath(null, false),

    /*
    |--------------------------------------------------------------------------
    | views cache path
    |--------------------------------------------------------------------------
    |
    | This config tells leaf where to save cached and compiled views.
    |
    */
    'views.cachePath' => StoragePath('framework/views')
];
