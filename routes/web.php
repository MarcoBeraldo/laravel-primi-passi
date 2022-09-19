<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/questi', function () {
    return view('questi');
});

Route::get('/sono', function () {
    return view('sono');
});

Route::get('/cinque', function () {
    return view('cinque');
});

Route::get('/link', function () {
    return view('link');
});

Route::get('/diversi', function () {
    return view('diversi');
});



