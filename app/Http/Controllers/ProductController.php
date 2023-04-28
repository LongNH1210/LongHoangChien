<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function viewProductList() {
        $categories = Category::all();
        $products = Product::all();
        $data = [
            'products' => $products,
            'categories' => $categories
        ];
        return view('view_product_list', $data);
    }

    public function viewProductDetail($product_id)
    {
        $product = Product::find($product_id);
        return view('/customers/view_product_detail',compact('product'));
    }

    public function adminviewProductDetail($product_id)
    {
        $product = Product::find($product_id);
        return view('/admins/admin_view_product_detail',compact('product'));
    }

    public function manageProduct() {
        $categories = Category::all();
        $products = Product::paginate(6);
        $data = [
            'products' => $products,
            'categories' => $categories
        ];
        return view('/admins/manage_product', $data);
    }

    public function createProduct()
    {
        return view('/admins/create_product');
    }

    public function storeProduct(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_category' => 'required',
            'product_price' => 'required|numeric',
            'product_description' => 'required'
            ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        }
        Product::create($input);
        return redirect('manage_product')->with('Ok','Product Created!');
    }

    public function editProduct(Product $product)
    {
        return view('admins/edit_product',compact('product'));
    }

    public function updateProduct(Request $request, Product $product)
    {
        $request->validate([
            'product_name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_category' => 'required',
            'product_price' => 'required',
            'product_description' => 'required'
            ]);
        $input = $request->all();
        if ($image = $request->file('image')) {
            $destinationPath = 'images';
            $productImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $productImage);
            $input['image'] = "$productImage";
        } else {
            unset($input['image']);
        }
        $product->update($input);
        return redirect('manage_product')->with('Ok','Product Updated!');
    }

    public function deleteProduct(Product $product)
    {
        $product->delete();
        return redirect('manage_product')->with('Ok','Product Deleted!');
    }
}
