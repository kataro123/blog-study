<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Post;

class HomeFetch extends BaseController
{
    public function banner()
    {
        return view('_partials/_bannerHome');
    }

    public function trending()
    {

        if (!$posts = cache('trending')) {
            $post = new Post();
            $posts = $post->select('posts.title,posts.slug, users.firstName as userFirstName, users.lastName as userLastName')->join('users', 'users.id = posts.user_id')->orderBy('visits', 'desc')->findAll(5);

            cache()->save('trending', $posts, 300);
        }

        return view('_partials/_trending', ['posts' => $posts]);
    }

    public function recent()
    {

        helper('text');

        if (!$recent = cache('recent')) {


            cache()->save('recent', $recent, 300);
            $post = new Post();
            $recent = $post->select(
                'posts.id, posts.title,posts.slug, posts.image, posts.created_at, posts.description, categories.name as categoryName, users.firstName as userFirstName, users.lastName as userLastName'
            )->join(
                'users',
                'users.id = posts.user_id'
            )->join(
                'categories',
                'categories.id = posts.category_id'
            )->orderBy('id', 'desc')->findAll(7);
        }

        $data = [
            'recent' => $recent
        ];

        return view('_partials/_recent', $data);
    }
}
