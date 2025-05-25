<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('layouts.login')->with('title', 'Page Home');
});
Route::get('/home', function () {
    return view('layouts.halaman')->with('title', 'Page Home');
});

Route::get('/menu', function () {
    return view('layouts.menu')->with('title', 'Page Menu');
});

Route::get('/contact', function () {
    return view('layouts.contact')->with('title', 'Page Contact');
});

Route::get('/detail', function () {
    return view('layouts.detail')->with('title', 'Page Detail');
});

Route::resource('/admin/dashboard', AdminDashboard::class);
Route::resource('/admin/kategori', KategoriController::class);
Route::resource('/admin/product', ProductController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
