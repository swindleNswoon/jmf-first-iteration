<?php

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

Route::get('/news', function () {
    return view('news');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/payment', function () {
    return view('payment');
});

Route::get('/failure', function () {
    return view('failure');
});

Route::get('/thanks', function () {
    return view('thanks');
});

Route::post('info/submit', 'InfoController@submit');
