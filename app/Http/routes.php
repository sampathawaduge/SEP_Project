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

Route::group(['middleware' => 'web'] , function(){

    Route::get('/' , 'HomeController@index');

    Route::get('/templates/new', 'AdminController@index');

    Route::get('/templates/edit', 'AdminController@view');

    //Route::post('/templates/add', 'AdminController@store');

    Route::get('/demo','Loaddemo_controller@demo');

    Route::get('/about','Loaddemo_controller@about');

    Route::get('/post','Loaddemo_controller@post');

    Route::get('/contact','Loaddemo_controller@contact');

    Route::get('/landing', 'AdminController@view');

    Route::post('/update' , 'AdminController@update');

    Route::get('/templates/{temp}/edit' , 'AdminController@edit');

    Route::get('/templates/show/{temp}' , 'AdminController@show');

    Route::get('/templates/{temp}/delete' , 'AdminController@delete');

    Route::post('/templates/{temp}/update' , 'AdminController@update');





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


});

//    Route::post('/',function(){
//
//        $image = Input::file('temp_pic');
//        $filename = $image->getClientOriginalName();
//
//        $Template = new App\Template;
//        $Template->name = Input::get('name');
//        $Template->temp_pic = $filename;
//
//        $Template->save();
//
//        return back();
//
//
//
//});
Route::post('/templates/store', 'AdminController@store');




