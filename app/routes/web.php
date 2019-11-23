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
	$response->renderHtml('app/views/pages/errors/404.html');
});

$leaf->setNamespace('\App\Controllers');

$leaf->get('/', 'PagesController@index');

$leaf->get('/posts', 'PostsController@index');
$leaf->post('/posts', 'PostsController@store');
$leaf->get('/posts/create', 'PostsController@create');
$leaf->get('/posts/{post}/edit', 'PostsController@edit');
$leaf->match('PUT|PATCH|POST', '/posts/{post}', 'PostsController@update');
$leaf->get('/posts/delete/{post}', 'PostsController@destroy');
$leaf->get('/posts/{post}', 'PostsController@show');
// $leaf->delete('/posts/{post}', 'PostsController@destroy');

$leaf->run();