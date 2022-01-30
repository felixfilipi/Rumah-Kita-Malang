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
    return view('main');
});

Route::get('/items1', function () {
    return view('rumahkita1');
});

Route::get('/items2', function () {
    return view('rumahkita2');
});

Route::get('/items3', function () {
    return view('rumahkita3');
});