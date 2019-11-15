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

// $leaf->before('GET|POST', function() {
//     // api middle ware
// });

$leaf->set404(function() use($response) {
	$response->respond(["message" => "Error 404, route not found"]);
});

$leaf->get('/api/home', function() {
    echo "api home";
});

$leaf->get('/api/users/all', function() {
    echo "All Users";
});

$leaf->get('/user', function() {
    // something here
});

$leaf->run();