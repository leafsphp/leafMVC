<?php

/*
|--------------------------------------------------------------------------
| Switch to root path
|--------------------------------------------------------------------------
|
| Point to the application root directory so leaf can accurately
| resolve app paths.
|
*/
chdir(dirname(__DIR__));

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
require dirname(__DIR__) . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Bring in (env)
|--------------------------------------------------------------------------
|
| Quickly use our environment variables
|
*/
try {
    \Dotenv\Dotenv::createUnsafeImmutable(dirname(__DIR__))->load();
} catch (\Throwable $th) {
    trigger_error($th);
}

/*
|--------------------------------------------------------------------------
| Load application paths
|--------------------------------------------------------------------------
|
| Tell Leaf MVC Core where to locate application paths
|
*/
Leaf\Core::paths(PathsConfig());

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
| Attach blade view
|--------------------------------------------------------------------------
|
| Since blade no longer ships with Leaf by default, we
| can attach blade back to Leaf so you can use Leaf MVC
| as you've always used it.
|
*/
Leaf\View::attach(\Leaf\Blade::class);

/*
|--------------------------------------------------------------------------
| Additional Leaf Database Config
|--------------------------------------------------------------------------
|
| Load leaf database configuration
|
*/
Leaf\Database::config(DatabaseConfig());

/*
|--------------------------------------------------------------------------
| Sync Leaf Db with ORM and connect
|--------------------------------------------------------------------------
|
| Sync Leaf Db with ORM and connect to the database
| This allows you to use Leaf Db without having to initialize it
| in your controllers.
|
| This is optional, you can still use Leaf Db in your controllers. If you
| want to opt into this, just uncomment the line below.
|
*/
// Leaf\Database::syncLeafDb();

/*
|--------------------------------------------------------------------------
| Initialise Config
|--------------------------------------------------------------------------
|
| Pass your application configuration into your leaf app.
|
*/
app()->config(AppConfig());

/*
|--------------------------------------------------------------------------
| Default fix for CORS
|--------------------------------------------------------------------------
|
| This just prevents the connection client from throwing
| CORS errors at you.
|
*/
app()->cors(CorsConfig());

/*
|--------------------------------------------------------------------------
| Route Config
|--------------------------------------------------------------------------
|
| Require app routes.
|
*/
require dirname(__DIR__) . '/app/routes/index.php';

/*
|--------------------------------------------------------------------------
| Run Leaf Application
|--------------------------------------------------------------------------
|
| Require app routes
|
*/
app()->run();
