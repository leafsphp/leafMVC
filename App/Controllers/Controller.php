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
		$this->auth->config("LOGIN_PARAMS_ERROR", "Username not registered!");

		// Password encode is run when leaf wants to encode passwords on register
		// This exact method is used by default in Leaf, so you can delete it if
		// you want to.
		$this->auth->config("PASSWORD_ENCODE", function ($password) {
			return Password::hash($password);
		});

		// this function is run to verify the password. It's done by default,
		// so you can remove this line and the above line if you wish to.
		$this->auth->config("PASSWORD_VERIFY", function ($password, $hashedPassword) {
			// Inside the password_verify method, you have access to the password and the hashed password
			return Password::verify($password, $hashedPassword);
		});

		// You can refer to https://leafphp.netlify.app/#/leaf/v/2.4/core/auth for auth docs
	}
}
