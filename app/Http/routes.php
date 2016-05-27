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
//Route::get('/landing', function () {
//    return view('landing');
//});

//Route::get('/home', function () {
//    return view('home');
//});
//Route::get('/site', function () {
//    return view('site');
//});
//Route::get('/temp', function () {
//    return view('temp');
//});
//Route::get('/profile', function () {
//    return view('profile');
//});
//
Route::get('/galery', function () {
    return view('galery');
});

Route::get('/demo','Loaddemo_controller@demo');
Route::get('/about','Loaddemo_controller@about');
Route::get('/post','Loaddemo_controller@post');
Route::get('/contact','Loaddemo_controller@contact');



Route::group(['middleware' => 'web'] , function(){
    Route::get('/landing', 'MainController@index');
    Route::auth();

    Route::get('/home', 'HomeController@index');

    Route::get ('profile', 'profileController@index');

    Route::post('user', 'profileController@update');
    Route::post('userLINK', 'profileController@link');

    Route::post('user/{pic}', 'profileController@picture');

    Route::post('userpw', 'profileController@changePwd');

    Route::get('gallery/list','GalleryController@viewGalleryList');
    Route::post('gallery/save','GalleryController@saveGallery');
    Route::post('gallery/delete/{id}','GalleryController@deleteGallery');
    Route::get('gallery/view/{id}','GalleryController@viewGalleryPics');
    Route::post('image/do-upload','GalleryController@doImageUpload');


    //Admin route
    //Route::get('/' , 'HomeController@index');
    Route::get('/templates/new', 'AdminController@index');
    Route::get('/templates/edit', 'AdminController@view');
    Route::get('/landing', 'AdminController@view');
    Route::post('/update' , 'AdminController@update');
    Route::get('/templates/{temp}/edit' , 'AdminController@edit');
    Route::get('/templates/show/{temp}' , 'AdminController@show');
    Route::get('/templates/{temp}/delete' , 'AdminController@delete');
    Route::post('/templates/{temp}/update' , 'AdminController@update');
    Route::post('/templates/store', 'AdminController@store');




});


