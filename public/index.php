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
| Load Leaf configuration
|--------------------------------------------------------------------------
|
| Leaf MVC allows you to customize Leaf and it's modules using
| configuration files defined in the config folder. This line
| loads the configuration files and makes them available to
| your application.
|
*/
Leaf\Core::loadApplicationConfig();

/*
|--------------------------------------------------------------------------
| Sync Leaf Db with ORM and connect
|--------------------------------------------------------------------------
|
| Sync Leaf Db with ORM and connect to the database
| This allows you to use Leaf Db and Leaf Auth without
| having to initialize them in your controllers.
|
| If you want to use a different connection from those
| used in, your models, you can remove the line below and
| add your own connection with:
| db()->connect(...)
|
| **Uncomment the line below to use Leaf Db or Auth**
*/
// \Leaf\Database::initDb();

/*
|--------------------------------------------------------------------------
| Run your Leaf MVC application
|--------------------------------------------------------------------------
|
| This line brings in all your routes and starts your application
|
*/
\Leaf\Core::runApplication();
