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
    Route::get('/', 'MainController@index');
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

    Route::get('/temp','Loaddemo_controller@index');//sameera
    Route::get('/edit/{id}','Loaddemo_controller@edit');//sameera
    Route::post('/insert/{id}','PreviewController@insert');//sameera
    Route::get('preview/site/{id}','PreviewController@viewsite');//sameera
    Route::get('/site','PreviewController@read');//sameera
    Route::get('deletesite/{siteid}','PreviewController@deletesite');//sameera
    Route::get('/showpost','Loaddemo_controller@editpost');//sameera
    Route::post('/addpost','PostController@store');//sameera
    Route::get('delete/{id}','PostController@destroy');//sameera
    Route::get('/updatepostshow/{id}','PostController@displayupdatefields');//sameera
    Route::post('/update','PostController@update');//sameera
    Route::get('/updatetemp/{id}','PreviewController@updatetemplateid');//sameera

    //Admin route
    //Route::get('/' , 'HomeController@index');
    Route::get('/templates/new', 'AdminController@index');
    Route::get('/templates/edit', 'AdminController@view');
    Route::get('/landing', 'AdminController@admin_view');
    Route::post('/update' , 'AdminController@update');
    Route::get('/admin/home' , 'AdminController@admin_view');
    
    Route::get('/templates/{temp}/edit' , 'AdminController@edit');
    Route::get('/templates/show/{temp}' , 'AdminController@show');
    Route::get('/templates/{temp}/delete' , 'AdminController@delete');
    Route::post('/templates/{temp}/update' , 'AdminController@update');
    Route::post('/templates/store', 'AdminController@store');

    Route::get('/templates/slide', 'AdminController@slide_view');
    Route::post('/templates/slide/new', 'AdminController@store_image');
    Route::get('/templates/slide/{slide}/change1' , 'AdminController@change1');
    Route::get('/templates/slide/{slide}/change2' , 'AdminController@change2');
    Route::get('/templates/slide/{slide}/change3' , 'AdminController@change3');
    //Route::get('/templates/mainslide', 'AdminController@getslideimage');

   // Route::get('/templates/welcome', 'AdminController@getslideimage');
    Route::post('/templates/mail', 'MainController@store_mail');
    Route::get('/templates/mail/view', 'MainController@view_mail');
    Route::get('/templates/{mail}/ignor' , 'MainController@ignor_mail');
    Route::post('templates/{mail}/reply' , 'MainController@reply_mail');
    //Route::post('templates/{mail}/createmail' , 'MainController@create_mail');


});


