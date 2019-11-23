<?php
    namespace App\Controllers;

    use Leaf\Core\Controller;
    use Leaf\Core\Http\Request;
    use Leaf\Core\Http\Session;

    use App\Models\Post;

    class PostsController extends Controller {
        public function __construct() {
            parent::__construct();
            $this->request = new Request;
            $this->session = new Session;
        }
        /**
         * Display a listing of the resource.
         */
        public function index() {
            $this->set([
                "posts" => Post::orderBy('created_at', 'desc')->paginate(15),
                "session" => $this->session->getBody()
            ]);
            $this->render("pages/posts/index");
            $this->session->remove("success");
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
            $post = new Post;
            $post->title = $this->request->getParam("title");
            $post->body = $this->request->getParam("body");
            $post->save();

            $title = $this->request->getParam("title");

            $this->session->set("success", "$title has been posted");

            header('location: /posts');
        }

        /**
         * Display the specified resource.
         */
        public function show($id) {
            $this->set([
                "post" => Post::find($id)
            ]);
            
            $this->render("pages/posts/show");
        }

        /**
         * Show the form for editing the specified resource.
         */
        public function edit($id) {
            $this->set([
                "post" => Post::find($id)
            ]);
            
            $this->render("pages/posts/edit");
        }

        /**
         * Update the specified resource in storage.
         */
        public function update($id) {
            $post = Post::find($id);
            $post->title = $this->request->getParam("title");
            $post->body = $this->request->getParam("body");
            $post->save();

            $title = $this->request->getParam("title");

            $this->session->set("success", "$title has been updated");

            header('location: /posts');
        }

        /**
         * Remove the specified resource from storage.
         */
        public function destroy($id) {
            $post = Post::find($id);
            $post->delete();

            $this->session->set("success", "Post deleted");

            header('location: /posts');
        }
    }