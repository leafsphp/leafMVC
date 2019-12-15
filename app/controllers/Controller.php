<?php
namespace App\Controllers;

use Leaf\Core\Controller as AppController;
use Leaf\Core\Http\Request;

class Controller extends AppController {
	public function __construct() {
		parent::__construct();
		$this->request = new Request;
    }
}