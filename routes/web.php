<?php

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
    return view('index');
});

Route::get('/about', function () {
    return view('about-us');
});

Route::get('/contact', function () {
    return view('contact-us');
});

Route::get('/track', function () {
    return view('tracking');
});

Route::get('/pricing', function () {
    return view('pricing-plans');
});

Route::get('/blog', function () {
    return view('blog');
});




