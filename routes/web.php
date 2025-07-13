<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'index']);
Route::get('/articles/{slug}', [ArticleController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});

Route::view('/contact', 'contact')->name('contact');
Route::view('/about', 'about')->name('about');
