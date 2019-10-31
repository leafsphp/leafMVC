<?php
	require dirname(__DIR__). "/init.php";
	
	$leaf->set404(function() use($response) {
		$response->respond(["message" => "Error 404, page not found"]);
	});

	$leaf->setNamespace('\App\Controllers');
	$leaf->get('/', 'IndexController@index');