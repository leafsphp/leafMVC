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

$leaf->before('GET|POST', function() {
    // api middle ware
});

$leaf->get('/user', function() {
    // something here
});

$leaf->run();