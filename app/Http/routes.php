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

    Route::get('/temp','Loaddemo_controller@index');
    Route::get('/demo','Loaddemo_controller@demo');
    Route::get('/edit','Loaddemo_controller@edit');
    Route::get('/live','Loaddemo_controller@live');
    Route::get('/live_demo','Loaddemo_controller@live_demo');
    Route::get('/live_about','Loaddemo_controller@live_about');
    Route::get('/live_post','Loaddemo_controller@live_post');
    Route::get('/live_contact','Loaddemo_controller@live_contact');

    Route::get('/site','PreviewController@read');
    Route::post('/insert','PreviewController@insert');
    Route::get('/post','PreviewController@read');
    Route::get('/preview/site/{site}','PreviewController@viewsite');

    Route::post('/addpost','PostController@store');
    Route::get('/updatepost/{id}','PostController@displayupdatefields');
    Route::get('/delete/{id}','PostController@destroy');
    Route::post('/update','PostController@update');
    Route::get('/addpost','Loaddemo_controller@editpost');
    Route::get('/deletesite/{id}','PreviewController@deletesite');
//    Route::get()
});



