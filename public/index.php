<?php

$appPath = dirname(__DIR__);

/*
|--------------------------------------------------------------------------
| Switch to root path
|--------------------------------------------------------------------------
|
| Point to the application root directory so leaf can accurately
| resolve app paths.
|
*/
chdir($appPath);

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| for our application. We just need to utilize it! We'll require it
| into the script here so that we do not have to worry about the
| loading of any our classes "manually". Feels great to relax.
|
*/
require "$appPath/vendor/autoload.php";

/*
|--------------------------------------------------------------------------
| Load application paths
|--------------------------------------------------------------------------
|
| Decline static file requests back to the PHP built-in webserver
|
*/
if (php_sapi_name() === 'cli-server') {
    $path = realpath(__DIR__ . parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

    if (is_string($path) && __FILE__ !== $path && is_file($path)) {
        return false;
    }

    unset($path);
}

/*
|--------------------------------------------------------------------------
| Bring in (env)
|--------------------------------------------------------------------------
|
| Load our environment variables into our application context
|
*/
\Leaf\Core::loadApplicationEnv($appPath);

/*
|--------------------------------------------------------------------------
| Run your Leaf MVC application
|--------------------------------------------------------------------------
|
| This line brings in all your routes and starts your application
|
*/
\Leaf\Core::runApplication();
