<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;
use CodeIgniter\HTTP\ResponseInterface;

class Search extends BaseController
{
    public function index()
    {
        helper('text');
        $searched = $this->request->getGet('s');

        $post = new Post();
        $post
            ->select('posts.image, posts.title, posts.created_at, posts.slug, posts.description, categories.name as categoryName, users.firstName as userFirstName, users.lastName as userLastName, users.image as avatar')
            ->join('users', 'users.id = posts.user_id')
            ->join('categories', 'categories.id = posts.category_id')
            ->like('title', $searched)
            ->orLike('description', $searched);
        // echo "<pre>";
        // var_dump($post->paginate(8));
        // echo "<pre>";
        // die();


        return view('search', [
            'posts' => $post->paginate(8),
            'pager' => $post->pager,
            'searched' => $searched
        ]);
    }
}
