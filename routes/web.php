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
Route::get('/mostRead/index', function () {
    return view('client.mostRead.index');
});
Route::get('/mostRead/detail', function () {
    return view('client.mostRead.detail');
});

Route::get('/trand/index', function () {
    return view('client.trand.index');
});

Route::get('/trand/detail', function () {
    return view('client.trand.detail');
});

Route::get('/lastest/index', function () {
    return view('client.lastest.index');
});

Route::get('/trand/topic', function () {
    return view('client.trand.topic');
});