<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Comment;
use App\Models\Post as ModelsPost;
use App\Models\Reply;
use CodeIgniter\HTTP\ResponseInterface;
use stdClass;

class Post extends BaseController
{
    public function index(string $slug)
    {
        $post = new ModelsPost();
        $post = $post->select('posts.id,title,posts.slug,description,visits,posts.created_at,categories.name as categoryName')
            ->where('posts.slug', $slug)
            ->join('categories', 'categories.id = posts.category_id')
            ->first();

        $comments = (new Comment)->comments($post->id);

        return view('post', ['post' => $post, 'comments' => $comments]);
    }
}
