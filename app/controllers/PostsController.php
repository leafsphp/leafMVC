<?php
    namespace App\Controllers;

    use Leaf\Core\Controller;
    use Leaf\Core\Http\Request;

    use App\Models\Post;

    class PostsController extends Controller {
        public function __construct() {
            parent::__construct();
            $this->request = new Request;
            $this->configure();
        }
        /**
         * Display a listing of the resource.
         */
        public function index() {
            $this->set([
                "posts" => Post::orderBy('created_at', 'desc')->paginate(15)
            ]);
            return $this->render("pages/posts/index");
        }

        /**
         * Show the form for creating a new resource.
         */
        public function create() {
            $this->render("pages/posts/create");
        }

        /**
         * Store a newly created resource in storage.
         */
        public function store() {
            echo $this->request->getParam("title")."<br>";
            echo $this->request->getParam("body");
        }

        /**
         * Display the specified resource.
         */
        public function show($id) {
            $this->set(["post" => Post::find($id)]);
            $this->render("pages/posts/show");
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
        public function update($id) {
            //
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id) {
            //
        }
    }