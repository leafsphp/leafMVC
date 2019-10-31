<?php
namespace App\Controllers;

use \Leaf\Core\Controller;
use \App\Models\Index;

class IndexController extends Controller {
	public function __construct() {
		parent::__construct();
		$this->note = new Index;
	}

	public function index() {
		$this->configure(["veins_dir" => "app/views", "cache_dir" => "app/views/dist"]);
		$this->set(["notes" => $this->note->getNotes()]);
		$this->render("index");
	}

	public function create() {}
	public function show() {}
	public function destroy() {}
}