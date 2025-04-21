<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = [
            [
                'name' => 'Parfum delux',
                'description' => 'Aroma dengan elegan',
                'price' => 'Rp 120.000'
            ],
            [
                'name' => 'Parfum Signatura',
                'description' => 'Aroma melekat dengan kualitas extrak de parfum',
                'price' => 'Rp 240.000'
            ]
        ];
        
        return view('home', compact('featuredProducts'));
    }
}