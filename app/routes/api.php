<?php
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
| Enjoy building your API!
|
*/

/*
|--------------------------------------------------------------------------
| Example Middleware
|--------------------------------------------------------------------------
|
| This is an example middleware you can add to your 
| API routes. This won't affect your web routes.
|
*/
$app->before('GET|POST', '/api/.*', function() {
    header('Content-Type: application/json');
});

$app->set404(function() {
	respond(["message" => "Error 404, route not found"]);
});

$app->get('/api/user/{id}', function($id) {
    respond(["message" => "User $id"]);
});
