<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::take(4)->orderBy('price', 'desc')->get();

        return view('home', compact('featuredProducts'));
    }
}
