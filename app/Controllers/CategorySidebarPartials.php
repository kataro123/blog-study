<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;

class CategorySidebarPartials extends BaseController
{
    public function index(string $category)
    {
        $order = match ($category) {
            'popular' => ['posts.visits', 'asc'],
            'trending' => ['posts.visits', 'desc'],
            'latest' => ['posts.id', 'desc'],
            default => ['posts.id', 'desc']
        };

        if (!$posts = cache('sidebar-' . $category)) {

            $post = new Post();
            $posts = $post->select('posts.image, posts.slug, posts.title, posts.created_at, users.firstName as userFirstName, users.lastName as userLastName, categories.name as categoryName')
                ->join('users', 'users.id = posts.user_id')
                ->join('categories', 'categories.id = posts.category_id')
                ->orderBy($order[0], $order[1])
                ->findAll(5);

            cache()->save('sidebar-' . $category, $posts, 300);
        }


        return view('_partials/_sidebar_tabs', ['posts' => $posts]);
    }
}
