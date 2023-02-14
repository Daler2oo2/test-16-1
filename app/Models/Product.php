<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillabel = ['id', 'name', 'price', 'count'];

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'product_categories');
    }
}
