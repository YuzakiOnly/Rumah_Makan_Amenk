<?php

use App\Http\Controllers\AdminDashboard;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('layouts.login')->with('title', 'Page Home');
});
Route::get('/', function () {
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
