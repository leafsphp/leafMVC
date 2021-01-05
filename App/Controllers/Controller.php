<?php

namespace App\Controllers;

// Leaf Auth is a package which makes user authentication simple
use Leaf\Auth;
use Leaf\Helpers\Password;

/**
 * This is the base controller for your Leaf API Project.
 * You can initialize packages or define methods here to use
 * them across all your other controllers which extend this one.
 */
class Controller extends \Leaf\ApiController
{
	/** @var \Leaf\Auth */
	public $auth;

	public function __construct()
	{
		parent::__construct();

		// In this version, request isn't initialised for you. You can use
		// requestData() or request() to get request data or initialise it yourself
		$this->auth = new Auth;

		// autoConnect uses the .env variables to quickly connect to db
		$this->auth->autoConnect();

		// set default token expiry time
		$this->auth->tokenLifetime(60 * 60 * 24 * 365);

		// You can configure auth to get additional customizations
		// This can be done here with the Auth::config method or
		// simply in the Config/auth.php file
		$this->auth->config(authConfig("settings"));

		// You can refer to https://leafphp.netlify.app/#/leaf/v/2.4/core/auth for auth docs

		// New in v2.5. This alloows us to direct our attention
		// to session authentication instead of the default API JWT method.
		$this->auth->useSession();
	}
}
