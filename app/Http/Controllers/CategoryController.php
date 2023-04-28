<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class CategoryController extends Controller
{
    public function show($category_id){
    $categories = Category::all();

    $products = Product::where('product_category', $category_id)->get();
    return view('/view_product_list', compact('categories', 'products'));
}
}
