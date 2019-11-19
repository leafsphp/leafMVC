<?php
    namespace App\Controllers;

    use Leaf\Core\Controller;
    use Leaf\Core\Http\Request;

    class PostsController extends Controller {
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->set([
                "title" => "Leaf Vein Integration"
            ]);
            $this->render("index");
        }
    }