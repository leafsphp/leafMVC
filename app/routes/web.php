<?php
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
| Now create something great!
*/

$app->set404(function() use($app) {
	$app->response->renderPage('app/views/pages/errors/404.html');
});

$app->setNamespace('\App\Controllers');

$app->get('/', 'PagesController@index');

$app->get('/home', 'PostsController@AllPosts');
