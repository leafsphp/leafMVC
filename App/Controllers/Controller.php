<?php

namespace App\Controllers;

// Leaf Auth is a package which makes user authentication simple
use Leaf\Auth;

/**
 * This is the base controller for your Leaf API Project.
 * You can initialize packages here to use them across
 * all your other controllers which extend this one.
 */
class Controller extends \Leaf\Controller
{
	// this varible will be available in all your controllers
	// which extend this file.
	public $auth;

	public function __construct()
	{
		parent::__construct();
		// this is blade directory configuration.
		$this->configure(views_path(), storage_path("framework/views/"));
		$this->auth = new Auth;
		$this->auth->auto_connect();
	}
}
