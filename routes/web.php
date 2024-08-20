<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/services', function () {
    return view('services');
});


Route::get('/reviews', function () {
    return view('reviews');
});


Route::get('/gallery', function () {
    return view('gallery');
});


Route::get('/contact', function () {
    return view('contact');
});





