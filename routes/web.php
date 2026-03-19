<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', function () {
    return view('pages.services');
})->name('services');

// Route::get('/services/{slug}', function ($slug) {
//     return view('pages.service-detail', compact('slug'));
// })->name('services.detail');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/cities', [PageController::class, 'cities'])->name('cities');
Route::get('/service', [PageController::class, 'service'])->name('service');
Route::get('/service-detail', [ServiceController::class, 'servicedetail']);


Route::get('/blog', [BlogController::class, 'blog']);
Route::get('/blog-detail', [BlogController::class, 'blog-detail']);
