<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
| Now create something great!
*/

$response = new Leaf\Core\Http\Response;

$leaf->set404(function() use($response) {
	$response->respond(["message" => "Error 404, page not found"]);
});

$leaf->setNamespace('\App\Controllers');

// $leaf->get('/', 'IndexController@index');

$leaf->get('/react', 'ReactexampleController@index');

$leaf->get('/', 'PagesController@index');

$leaf->run();