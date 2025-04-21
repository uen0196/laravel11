<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = [
            [
                'name' => 'Rina',
                'comment' => 'Parfum floralnya tahan lama dan harumnya sangat natural!',
                'rating' => 5
            ],
            [
                'name' => 'Budi',
                'comment' => 'Aroma citrusnya segar banget, cocok untuk dipakai sehari-hari.',
                'rating' => 4
            ],
            [
                'name' => 'Sari',
                'comment' => 'Pengiriman cepat dan packing rapi. Aromanya persisten seharian.',
                'rating' => 5
            ]
        ];
        
        return view('testimonials', compact('testimonials'));
    }
}