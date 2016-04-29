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
Route::get('/landing', function () {
    return view('landing');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/site', function () {
    return view('site');
});
Route::get('/temp', function () {
    return view('temp');
});
Route::get('/profile', function () {
    return view('profile');
});

Route::get('/galery', function () {
    return view('galery');
});

Route::get('/demo','Loaddemo_controller@demo');
Route::get('/about','Loaddemo_controller@about');
Route::get('/post','Loaddemo_controller@post');
Route::get('/contact','Loaddemo_controller@contact');
