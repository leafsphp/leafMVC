<?php
    namespace App\Controllers;

    use Leaf\Core\Controller;

    class ReactexampleController extends Controller {
        public function __construct() {
            parent::__construct();
            $this->configure(["veins_dir" => "app/views", "cache_dir" => "app/views/dist"]);
        }

        public function index() {
            $user = (object) [
                'name' => 'Jane Doe',
                'email' => 'janedoe@gmail.com',
                'logged' => true
            ];
            $this->set([
                "user" => $user
            ]);
            $this->render("reactExample");
        }

        public function create() {
            
        }

        public function show() {

        }

        public function destroy() {

        }
    }