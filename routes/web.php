<?php

use App\Product;

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

Route::get("/api/products", function () {
    return Product::with('category')->latest()->get();
})->middleware('cors');

Route::view("/success", 'success');

Route::get("/cart", "CartsController@index");

Route::post("/cart/{product}", "CartsController@store");


Route::get("/products", "ProductController@index")->middleware('verified');

Route::get('/categories/{category}', 'ProductController@showcategory');

Route::get('/', 'WelcomeController@index');
Route::get('/products/{product}', 'ProductController@show');
Route::post("/checkout", "CheckoutController@store");

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');
