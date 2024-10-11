<?php

use Illuminate\Support\Facades\Route;

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
