<?php
    namespace App\Controllers;

    use Leaf\Core\Controller;
    use Leaf\Core\Http\Request;

    class PostsController extends Controller {
        public function __construct() {
            parent::__construct();
        }

        /**
         * Display a listing of the resource.
         */
        public function index() {
            $this->set([
                "title" => "Leaf Vein Integration"
            ]);
            $this->render("index");
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create() {
            //
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request) {
            //
        }

        /**
         * Display the specified resource.
         */
        public function show($id) {
            //
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit($id) {
            //
        }

        /**
         * Update the specified resource in storage.
         */
        public function update(Request $request, $id) {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id) {
            //
        }
    }