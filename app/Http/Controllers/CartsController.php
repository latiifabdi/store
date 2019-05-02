<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartsController extends Controller
{
    public function index()
    {
        return view('carts.index');
    }
    public function store(Product $product)
    {
        Cart::add($product->id, $product->name, 1, number_format($product->price / 100, 2));

        return redirect('/cart');
    }
}
