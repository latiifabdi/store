<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $popularProducts = Product::inRandomOrder()->take(4)->get();
        $newProducts = Product::latest()->take(4)->get();


        return view('welcome.index', compact('popularProducts', 'newProducts'));
    }
}
