<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/galangdana', function () {
    return view('galangdana');
})->name('galangdana');

Route::get('/informasi', function () {
    return view('informasi');
})->name('informasi');

Route::get('/request', function () {
    return view('request');
})->name('request');

Route::get('/posts', [PostController::class, 'index'])->name('post.index');

// Route to display a single post
Route::get('/post/{id}', [PostController::class, 'show'])->name('post.show');

Route::get('/galangdana', [PostController::class, 'galangdana']);


Route::get('/galangdana', [PostController::class, 'galangdana'])->name('galangdana');


Route::get('/', [PostController::class, 'index'])->name('home');
