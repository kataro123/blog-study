<?php

namespace App\Cells;

use App\Models\Categories;

class CategoryCell
{
    public function render(string $view)
    {
        $category = new Categories();
        $categories = $category->select('name,slug')->findAll();
        return view("partials/cell/{$view}", ['categories' => $categories]);
    }
}
