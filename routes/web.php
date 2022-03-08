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
    echo("Selamat Datang");
});

Route::get('/about', function () {
    echo("Tasya Sevia Adha <br> 2041720031 <br> TI-2D");
});

Route::get('/articles/1', function () {
    echo("Halaman Artikel ID 1");
});

Route::get('/articles/2', function () {
    echo("Halaman Artikel ID 2");
});
