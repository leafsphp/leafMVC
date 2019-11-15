<?php	
	
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$leaf->set404(function() use($response) {
	$response->respond(["message" => "Error 404, page not found"]);
});

$leaf->setNamespace('\App\Controllers');
$leaf->get('/', 'IndexController@index');
$leaf->get('/react', 'ReactexampleController@index');
