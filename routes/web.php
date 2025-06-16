<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tentang-kami', [AboutController::class, 'index'])->name('about');
Route::get('/testimoni', [TestimonialController::class, 'index'])->name('testimonials');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::get('/login-form', [AuthController::class, 'loginForm'])->name('login-form');

Route::post('/login', [AuthController::class, 'login'])->name('admin-login');

Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/');
})->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::post('/admin/product/add', [AdminController::class, 'addProduct'])->name('admin.product.add');
    Route::put('/admin/product/update/{id}', [AdminController::class, 'updateProduct'])->name('admin.product.update');
    Route::delete('/admin/product/delete/{id}', [AdminController::class, 'deleteProduct'])->name('admin.product.delete');
});
