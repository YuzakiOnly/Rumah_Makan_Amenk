<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.halaman');
});

Route::resource('/menu',MenuController::class);

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard.dashboard');
});

Route::get('/contact', function () {
    return view('layouts.contact');
});

Route::get('/detail', function () {
    return view('layouts.detail');
});
