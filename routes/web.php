<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


/*
|   Admin and User Routes
*/

Route::get('/', function () {
    return view('loginCustomer');
});

Route::get('/adminLogin', function() {
    return view('adminLogin');
});


Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/view_product_list_admin', function () {
    return view('/admins/view_product_list_admin');
});
// Route::get('/view_product_list', function () {
//     return view('/view_product_list');
// });
// Route::get('/view_product_list', 'App\Http\Controllers\CategoryController@viewCategoryList')->name('view_category_list');
Route::get('/view_product_list', [ProductController::class, 'viewProductList'])->name('view_product_list');
Route::get('/view_product_list_admin', [ProductController::class, 'viewProductList'])->name('view_product_list_admin');
Route::get('/viewProductDetail/{product}', [ProductController::class, 'viewProductDetail'])->name('view_product_detail');
Route::get('/adminviewProductDetail/{product}', [ProductController::class, 'adminviewProductDetail'])->name('admin_view_product_detail');

Route::get('/view_order', function () {
    return view('view_order');
});


/*
|   Admin Routes
*/
Route::get('/manage_product', [ProductController::class, 'manageProduct'])->name('manage_product');
Route::get('/create_product', [ProductController::class, 'createProduct'])->name('create_product');
Route::post('storeProduct/', [ProductController::class, 'storeProduct'])->name('store_product');
Route::delete('deleteProduct/{product}', [ProductController::class, 'deleteProduct'])->name('delete_product');
Route::get('editProduct/{product}', [ProductController::class, 'editProduct'])->name('edit_product');
Route::put('editProduct/{product}', [ProductController::class, 'updateProduct'])->name('update_product');


/*
|   Customer Route
*/
Route::get('/customer_homepage', function () {
    return view('customers/customer_homepage');
});
Route::get('view_cart/{product_id}', [CartController::class, 'addToCart'])->name('add_to_cart');
Route::get('/view_cart', [CartController::class, 'viewCart'])->name('view_cart');
Route::delete('deleteCartItem{product_id}', [CartController::class, 'deleteCartItem'])->name('delete_cart_item');
Route::post('checkout', [CartController::class, 'checkout'])->name('checkout');
/*
    Login Route
*/
Route::get('/admin_homepage', function () {
    return view('admins/admin_homepage');
});
Route::post('admin_homepage', [LoginController::class, 'adminLogin'])->name('admin_login');
Route::post('customer_homepage', [LoginController::class, 'customerLogin'])->name('customer_login');

Route::get('/sign_up', function () {
    return view('sign_up');
});

Route::post('/', [SignUpController::class, 'customerSignUp'])->name('customer_signup');

Route::get('/about_us', function () {
    return view('about_us');
});

Route::get('/admin_view_product_detail', function () {
    return view('admin_view_product_detail');
});

Route::get('categories/{category_id}', [CategoryController::class, 'show'])->name('category.show');