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
    return view('client.home.index');
});

Route::get('/news', function () {
    return view('client.news.index');
});

Route::get('/news/detail', function () {
    return view('client.news.detail');
});

Route::get('/news/newsDetail', function () {
    return view('client.news.newsDetail');
});