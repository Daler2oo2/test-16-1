<?php 

namespace App\Repositories;

use App\Interfaces\CategoryInterface;
use App\Models\Category;

class CategoryRepository implements  CategoryInterface
{
    public function getAllWithProducts()
    {
        return Category::with('products')->orderBy('id','desc')->get();
    }

}