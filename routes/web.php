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
    return view('top');
})->name('/');



Route::group(['prefix' => 'admin','middleware' => 'auth'], function() {
    Route::get('news/create','Admin\NewsController@add');
    Route::post('news/create','Admin\NewsController@create');
    Route::get('news/delete','Admin\NewsController@edit');
    Route::get('news/update','Admin\NewsController@update');
    Route::get('news','Admin\NewsController@index');
    Route::get('news/details','Admin\NewsController@details');
    
    
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



