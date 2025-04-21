<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');
Route::get('/testimoni', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
