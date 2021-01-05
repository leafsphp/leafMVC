<?php

// This is an example route file. A few demo routes
// have been put together to give you a fair idea of building
// with Leaf API.

// Demo autentication routes
$app->group("/auth", function() use($app) {
    $app->get("/login", "Auth\LoginController@show");
    $app->post("/login", "Auth\LoginController@store");
    $app->get("/register", "Auth\RegisterController@show");
    $app->post("/register", "Auth\RegisterController@store");
    // Reset and recover account will be added later
});

$app->get("/home", "Auth\HomeController@index");
$app->get("/auth/logout", "Auth\LoginController@logout");

// Demo User routes
$app->group("/user", function() use($app) {
    $app->get("/", "Auth\AccountController@user");
    $app->get("/update", "Auth\AccountController@show_update");
    $app->post("/update", "Auth\AccountController@update");
});
