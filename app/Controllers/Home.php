<?php

namespace App\Controllers;

use App\Models\Post;

class Home extends BaseController
{
    public function index(): string
    {

        // $post = new Post();
        // $recent = $post->select(
        //     'posts.id, posts.title, posts.image, posts.created_at, posts.description, categories.name as categoryName, users.firstName as userFirstName, users.lastName as userLastName'
        // )->join(
        //     'users',
        //     'users.id = posts.user_id'
        // )->join(
        //     'categories',
        //     'categories.id = posts.category_id'
        // )->orderBy('id', 'desc')->findAll(7);
        // echo '<pre>';
        // var_dump($recent[0]);
        // echo '</pre>';

        // die();


        $data = [
            'title' => 'Blog Inicial'
        ];
        return view('home', $data);
    }
}
