<?php

/*
|--------------------------------------------------------------------------
| Set up 404 handler
|--------------------------------------------------------------------------
|
| Create a handler for 404 errors
|
*/
// app()->set404(function() {
// 	response()->page(ViewsPath("errors/404.html", false), 404);
// });

/*
|--------------------------------------------------------------------------
| Set up 500 handler
|--------------------------------------------------------------------------
|
| Create a handler for error 500
|
*/
// app()->setErrorHandler(function() {
// 	response()->page(ViewsPath("errors/500.html", false), 500);
// });

/*
|--------------------------------------------------------------------------
| Set up Controller namespace
|--------------------------------------------------------------------------
|
| This allows you to directly use controller names instead of typing
| the controller namespace first.
|
*/
app()->setNamespace('\App\Controllers');

// You can break up routes into individual files
require __DIR__ . '/_app.php';
