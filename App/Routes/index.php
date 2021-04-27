<?php

/**@var Leaf\App $app */

/*
|--------------------------------------------------------------------------
| Set up 404 handler
|--------------------------------------------------------------------------
|
| Create a handler for 404 errors
|
*/

$app->set404(function() {
	response()->headers->status(404);
	response()->page(views_path("errors/404.html", false));
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

$app->get("/", function () {
    echo view("index");
});
