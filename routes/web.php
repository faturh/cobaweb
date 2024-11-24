<?php

use Illuminate\Support\Facades\Route;
Route::get('/your-route', function () {
    return 'Route is working!';
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Fatur','title' => 'about']);
});

Route::get('/blog', function () {
    return view('blog',['title' => 'My Blog']);
});

Route::get('/contact', function () {
    return view('contact',['title' => 'contact']);
});
