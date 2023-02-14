<?php 

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Models\Product;

class ProductRepository implements  ProductInterface
{
    public function getAllWithCategories()
    {
       return Product::with('categories')->orderBy('id','desc')->get();
    }
}