<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contactInfo = [
            'address' => 'Jl. Aroma Wangi No. 123, Medan',
            'phone' => '(+62)082127184912',
            'email' => 'info@tokoparfumwangi.com',
            'hours' => 'Senin - Sabtu: 09.00 - 17.00 WIB'
        ];
        
        return view('contact', compact('contactInfo'));
    }
}