<?php
namespace Config;

class Debug {
	public function __construct() {
		$errors = new \Leaf\Config\Errors;
		env('APP_DEBUG') == true ? $errors->show() : $errors->hide();
	}
}