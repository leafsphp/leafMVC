<?php

// This is an example route file. A few demo routes
// have been put together to give you a fair idea of building
// with Leaf API.

// Demo autentication routes
$app->mount("/auth", function() use($app) {
	$app->post("/login", "UsersController@login");
	$app->post("/register", "UsersController@register");
    $app->post("/reset", "UsersController@reset_password");
    $app->post("/recover", "UsersController@recover_account"); 
});

// Demo User routes
$app->mount("/user", function() use($app) {
    $app->get("/", "UsersController@user");
	$app->post("/update", "UsersController@edit");
});
