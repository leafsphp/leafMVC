<?php

namespace App\Controllers;

/**
 * This is the base controller for your Leaf MVC Project.
 * You can initialize packages or define methods here to use
 * them across all your other controllers which extend this one.
 */
class Controller extends \Leaf\Controller
{
    public function __construct()
    {
        parent::__construct();

        // In this version, request isn't initialised for you. You can use
        // request() to get request data or initialise it yourself

        // autoConnect uses the .env variables to quickly connect to db
        // Leaf auth will smartly connect to this db connection
        db()->autoConnect();

        // You can configure auth to get additional customizations
        // This can be done here with the auth()->config method or
        // simply in the config/auth.php file
        auth()->config(AuthConfig());

        // You can refer to https://leafphp.dev/modules/auth for auth docs

        // To use JWT instead of sessions, open up config/auth.php and set
        // USE_SESSION to false
    }
}
