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
	$response->renderHtmlPage('app/views/pages/errors/404.html');
});

$leaf->setNamespace('\App\Controllers');

// $leaf->get('/', 'IndexController@index');

$leaf->get('/', 'PagesController@index');

$leaf->run();