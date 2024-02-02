<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post as ModelsPost;
use CodeIgniter\HTTP\ResponseInterface;

class Post extends BaseController
{
    public function index(string $slug)
    {
        $post = new ModelsPost();
        $post = $post->select('posts.id,title,posts.slug,description,visits,posts.created_at,categories.name as categoryName')
            ->where('posts.slug', $slug)
            ->join('categories', 'categories.id = posts.category_id')
            ->first();

        return view('post', ['post' => $post]);
    }
}
