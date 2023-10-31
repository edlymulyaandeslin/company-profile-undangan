<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ThemeController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Paket;
use App\Models\Testimonial;
use App\Models\Theme;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'pakets' => Paket::all(),
        'themes' => Theme::all(),
        'testimonials' => Testimonial::all(),
    ]);
});

//login
Route::get('/admin', [LoginController::class, 'index'])->name('login');
Route::post('/admin', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//dashboard
Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard',
        'categories' => Category::all(),
        'pakets' => Paket::all(),
        'testimoni' => Testimonial::all(),
        'theme' => Theme::all(),
        'admin' => User::all()

    ]);
})->middleware('auth');

//Category
Route::resource('/dashboard/categories', CategoryController::class)->except('show')->middleware('auth');

//Paket
Route::resource('/dashboard/paket', PaketController::class)->except('show')->middleware('auth');

//Testimonial
Route::resource('/dashboard/testimonial', TestimonialController::class)->middleware('auth');

// Themes
Route::resource('/dashboard/theme', ThemeController::class)->except('show')->middleware('auth');

// user
Route::resource('/dashboard/user', UserController::class)->except('show')->middleware('auth');
