<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'product_id';
    protected $fillable = [
        'product_name',
        'image',
        'product_category',
        'product_price',
        'product_description'
    ];

    // public function category() {
    //     return $this->belongsTo(Category::class,  'product_category', 'category_id');
    // }
}
