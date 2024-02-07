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

        if (!in_array($category, $allCategories)) {
            $categoryId = 1;
        } else {
            // $categoryId = str_replace('.slug', '', array_search($category, $allCategories));
            $categoryId = array_search($category, $allCategories);
        }

        $categoryId = $allCategories[str_replace('.slug', '.id', $categoryId)];

        if (!$posts = cache('category-home' . $categoryId)) {

            $post = new Post();
            $posts = $post->select('posts.title, posts.image, posts.description, posts.slug, posts.created_at, users.firstName as userFirstName, users.lastName as userLastName, categories.name as categoryName')
                ->where('category_id', $categoryId)
                ->join('users', 'users.id = posts.user_id')
                ->join('categories', 'categories.id = posts.category_id')
                ->findAll(10);

            cache()->save('category-home' . $categoryId, $posts, 300);
        }




        return view('_partials/_category', ['posts' => $posts]);
    }

    public function getCategoryPosts(string $slug)
    {
        helper('text');
        $category = new Categories();
        $category = $category->select('id')->where('slug', $slug)->first();

        $post = new Post();
        $post->select('posts.id,posts.title,posts.image,posts.created_at,posts.slug,posts.description,categories.name as categoryName, users.firstName as userFirstName, users.lastName as userLastName, users.image as userAvatar')
            ->join('users', 'users.id = posts.user_id')
            ->join('categories', 'categories.id = posts.category_id')
            ->where('category_id', $category->id)->orderBy('id', 'desc');

        return view('category', ['posts' => $post->paginate(5), 'pager' => $post->pager]);
    }
}
