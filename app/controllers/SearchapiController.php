<?php
    namespace App\Controllers;

    use Leaf\Core\ApiController;

    class Searchapi extends ApiController {
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->respond([
				"message" => "This is the Searchapi"
			]);
        }

        public function create() {
            
        }

        public function show() {

        }

        public function destroy() {

        }
    }