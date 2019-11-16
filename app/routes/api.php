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

$response = new Leaf\Core\Http\Response;

$leaf->before('GET|POST', function() {
    header('Content-Type: application/json');
}, null);

$leaf->set404(function() use($response) {
	$response->respond(["message" => "Error 404, route not found"]);
});

$leaf->get('/api/user/{id}', function($id) use($response) {
    $response->respond(["message" => "User $id"]);
});

$leaf->run();