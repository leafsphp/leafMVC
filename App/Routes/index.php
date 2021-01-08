<?php

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

// $app is the instance of Leaf
$app->view("/", "index");

$app->get("/app", function () {
	json(app()->routes(), 200);
});

