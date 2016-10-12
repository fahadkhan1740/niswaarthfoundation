<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/whatWeDo', function () {
    return view('whatWeDo');
});

Route::get('/whatCanYouDo', function () {
    return view('text');
});

Route::get('/newsAndInfo', function () {
    return view('portfolio');
});

Route::get('/contact', function () {
    return view('contact');
});
