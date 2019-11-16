<?php
    namespace App\Controllers;

    use Leaf\Core\Controller;
    use Leaf\Core\Http\Request;

    class PagesController extends Controller {
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->set([
                "title" => "Leaf MVC Home"
            ]);
            $this->render("home");
        }

        public function create() {
            
        }

        public function show() {

        }

        public function destroy() {

        }
    }