<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Categories;
use App\Models\Post;
use CodeIgniter\HTTP\ResponseInterface;

class Category extends BaseController
{

    public function index(string $category)
    {
        helper('array');
        helper('text');

        $categories = new Categories();
        $allCategories = array_flatten_with_dots($categories->asArray()->findAll());

        // var_dump(in_array('Calvados', $allCategories));
        // echo "<pre>";
        // var_dump($allCategories);
        // echo "</pre>";
        // die();

        if (!in_array($category, $allCategories)) {
            $categoryId = 1;
        } else {
            // $categoryId = str_replace('.slug', '', array_search($category, $allCategories));
            $categoryId = array_search($category, $allCategories);
        }

        // echo "<pre>";
        // var_dump(str_replace('.slug', '.id', $categoryId));
        $categoryId = $allCategories[str_replace('.slug', '.id', $categoryId)];
        // var_dump($categoryId);
        // echo "</pre>";
        // die();

        $post = new Post();
        $posts = $post->select('posts.title, posts.image, posts.description, posts.slug, posts.created_at, users.firstName as userFirstName, users.lastName as userLastName, categories.name as categoryName')
            ->where('category_id', $categoryId)
            ->join('users', 'users.id = posts.user_id')
            ->join('categories', 'categories.id = posts.category_id')
            ->findAll(10);

        // echo "<pre>";
        // var_dump(date('m/d/Y H:i:s', strtotime('+2 day', strtotime($posts[0]->created_at))));
        // var_dump(date('m/d/Y H:i:s', strtotime($posts[0]->created_at)));
        // var_dump($posts);
        // echo "</pre>";
        // die();



        return view('_partials/_category', ['posts' => $posts]);
    }

    public function getCategoryPosts(string $slug)
    {
        helper('text');
        $category = new Categories();
        $category = $category->select('id')->where('slug', $slug)->first();

        // var_dump($categoryId);

        $post = new Post();
        $post->select('posts.id,posts.title,posts.image,posts.created_at,posts.slug,posts.description,categories.name as categoryName, users.firstName as userFirstName, users.lastName as userLastName, users.image as userAvatar')
            ->join('users', 'users.id = posts.user_id')
            ->join('categories', 'categories.id = posts.category_id')
            ->where('category_id', $category->id)->orderBy('id', 'desc');

        return view('category', ['posts' => $post->paginate(5), 'pager' => $post->pager]);
    }
}
