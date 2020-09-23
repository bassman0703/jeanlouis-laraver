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

Route::get('/about/index', function () {
    return view('client.about.index');
});

Route::get('/team/index', function () {
    return view('client.team.index');
});

Route::get('/team/detail', function () {
    return view('client.team.detail');
});

Route::get('/sumwin-collection/index', function () {
    return view('client.sumwin-collection.index');
});

Route::get('/sumwin-collection/detail', function () {
    return view('client.sumwin-collection.detail');
});

Route::get('/sumwin-collection/news', function () {
    return view('client.sumwin-collection.news');
});

Route::get('/mostRead/more', function () {
    return view('client.mostRead.more');
});

Route::get('/sumwin-collection/home', function () {
    return view('client.sumwin-collection.home');
});

Route::get('/service/index', function () {
    return view('client.service.index');
});

Route::get('/sumwin-collection/backstage', function () {
    return view('client.sumwin-collection.backstage');
});

Route::get('/product/index', function () {
    return view('client.product.index');
});

Route::get('/product/home', function () {
    return view('client.product.home');
});

Route::get('/product/detail', function () {
    return view('client.product.detail');
});

Route::get('/product/moreDetail', function () {
    return view('client.product.moreDetail');
});

Route::get('/service/detail', function () {
    return view('client.service.detail');
});

Route::get('/service/moreDetail', function () {
    return view('client.service.moreDetail');
});

Route::get('/price/index', function () {
    return view('client.price.index');
});

Route::get('/contact/index', function () {
    return view('client.contact.index');
});