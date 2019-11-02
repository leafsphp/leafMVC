<?php	
	$leaf->set404(function() use($response) {
		$response->respond(["message" => "Error 404, page not found"]);
	});

	$leaf->setNamespace('\App\Controllers');
	$leaf->get('/', 'IndexController@index');
	$leaf->get('/react', 'ReactexampleController@index');
	// $leaf->get('/react', function() use($response) {
	// 	$response->renderHtmlPage('app/views/index.php');
	// });