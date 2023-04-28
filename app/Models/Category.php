<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    protected $fillable = [
        'category_name'
    ];

    // public function products() {
    //     $product = Product::all();
    //     return $this->hasMany(Product::class, 'product_category');
    // }
   
}
