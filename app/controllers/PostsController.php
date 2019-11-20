<?php
    namespace App\Controllers;

    use Leaf\Core\Controller;
    use Leaf\Core\Http\Request;

    use App\Models\Post;

    class PostsController extends Controller {
        /**
         * Display a listing of the resource.
         */
        public function index() {
            $this->set([
                "posts" => Post::orderBy('created_at', 'desc')->paginate(2)
            ]);
            $this->render("pages/posts/index");
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