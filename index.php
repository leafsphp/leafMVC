<?php
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
require_once __DIR__ . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Bring in (env)
|--------------------------------------------------------------------------
|
| Quickly use our environment variables
|
*/
\Dotenv\Dotenv::create(__DIR__)->load();

/*
|--------------------------------------------------------------------------
| Register The Leaf Auto Loader
|--------------------------------------------------------------------------
|
| Require all Leaf API's Files
|
*/
require __DIR__ . "/Config/bootstrap.php";

/*
|--------------------------------------------------------------------------
| Initialise Leaf Core
|--------------------------------------------------------------------------
|
| Plant a seed, grow the stem and return Leaf🤷‍
|
*/
$app = new Leaf\App;

/*
|--------------------------------------------------------------------------
| Default fix for CORS
|--------------------------------------------------------------------------
|
| This just prevents the connection client from throwing
| CORS errors at you.
|
*/
$app->response->cors();

/*
|--------------------------------------------------------------------------
| Error Configuration
|--------------------------------------------------------------------------
|
| Show or hide errors  for easy debugging
| You might want to set this to false for production
|
*/
Config\App::error_debug(true);

/*
|--------------------------------------------------------------------------
| Initialise Shortcut Functions
|--------------------------------------------------------------------------
|
| Simple functions you can call from anywhere in your application.
| This is not a core feature, you can remove it and your app would still
| work fine.
|
*/
require __DIR__ . "/Config/functions.php";

/*
|--------------------------------------------------------------------------
| Route Config
|--------------------------------------------------------------------------
|
| Require app routes
|
*/
require __DIR__ . "/App/routes/api.php";
require __DIR__ . "/App/routes/web.php";

/*
|--------------------------------------------------------------------------
| Run Leaf Application
|--------------------------------------------------------------------------
|
| Require app routes
|
*/
$app->run();