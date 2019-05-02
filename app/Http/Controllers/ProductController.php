<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Category;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        
        return view('products.index', compact('products'));
    }

    public function showcategory(Category $category)
    {
        $products = Product::where('category_id', $category->id)->get();

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        // dd($product);
        return view('products.show', compact('product'));
    }
}
