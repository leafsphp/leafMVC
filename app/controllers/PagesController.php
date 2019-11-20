<?php
    namespace App\Controllers;

    use Leaf\Core\Controller;
    use Leaf\Core\Http\Request;

    class PagesController extends Controller {
        public function __construct() {
            parent::__construct();
        }

        public function index() {
            $this->render("pages/index");
        }
    }