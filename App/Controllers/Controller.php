<?php

namespace App\Controllers;

// Leaf Auth is a package which makes user authentication simple
use Leaf\Auth;

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
        // requestData() or request() to get request data or initialise it yourself

        // autoConnect uses the .env variables to quickly connect to db
        Auth::autoConnect();

        // set default token expiry time
        Auth::tokenLifetime(60 * 60 * 24 * 365);

        // You can configure auth to get additional customizations
        // This can be done here with the Auth::config method or
        // simply in the Config/auth.php file
        Auth::config(AuthConfig());

        // You can refer to https://leafphp.netlify.app/#/leaf/v/2.4/core/auth for auth docs

        // New in v2.5. This allows us to use session
        // authentication instead of the default API JWT method.
        Auth::useSession();
    }
}
