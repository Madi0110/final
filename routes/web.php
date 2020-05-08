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


Route::get('/','StudentController@index');

Route::get('/create','PlayerController@create')->name('create');

Route::post('/create','PlayerController@store')->name('store');

Route::get('/players','PlayerController@index')->name('home');

Route::get('/about','TestController@index');

Route::get('/emblem', 'EmblemCont@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin', 'middleware'=>['auth','admin']],
    function(){
    Route::get('dashboard','DashBoardController@index')->name('dashboard');
    }

);

Route::group(['as'=>'author.','prefix'=>'author','namespace'=>'Author', 'middleware'=>['auth','admin']],
    function(){
        Route::get('dashboard','DashBoardController@index')->name('dashboard');
    }

);


