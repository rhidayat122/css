<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/info', function () {
    return view('tambahan.articles');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){

});

Auth::routes();

Route::get('/home', 'HomeController@index');
