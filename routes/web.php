<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/information', function () {
    return view('information');
});

Route::get('/contact', function () {
    return view('contact');
});