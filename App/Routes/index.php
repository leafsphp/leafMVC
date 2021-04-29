<?php

/**@var Leaf\App $app */

// You can break up routes into individual files
require __DIR__ . "/_app.php";

/*
|--------------------------------------------------------------------------
| Set up 404 handler
|--------------------------------------------------------------------------
|
| Create a handler for 404 errors
|
*/
$app->set404(function() {
	Leaf\Http\Headers::status(404);
	response()->page(views_path("errors/404.html", false));
});

/*
|--------------------------------------------------------------------------
| Set up 500 handler
|--------------------------------------------------------------------------
|
| Create a handler for error 500
|
*/
$app->setErrorHandler(function() {
	Leaf\Http\Headers::status(500);
	response()->page(views_path("errors/500.html", false));
});

/*
|--------------------------------------------------------------------------
| Set up Controller namespace
|--------------------------------------------------------------------------
|
| This allows you to directly use controller names instead of typing
| the controller namespace first.
|
*/
$app->setNamespace("\App\Controllers");
