<?php
    namespace App\Controllers;

    use App\Models\Post;

    use Leaf\Core\Controller;
    use Leaf\Core\Http\Request;

    class PostsController extends Controller {
        public function AllPosts() {
            $this->respond(Post::all());
        }
    }