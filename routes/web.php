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

Route::get('/','MainController@homepage');

Route::prefix('/admin')->middleware('auth')->group(function(){

    Route::get('', 'AdminController@dashboard')->name('admin');

    Route::prefix('/clients')->group(function(){

        Route::get('', 'AdminController@clients');
        Route::get('/getData', 'AdminController@clientGetData');
        Route::post('/insert', 'AdminController@clientInsert');

        Route::get('/edit/{id}', 'AdminController@clientEdit');
        Route::post('/update', 'AdminController@clientUpdate');
        Route::post('/delete', 'AdminController@clientDelete');

    });

    Route::prefix('/portfolio')->group(function(){

        Route::get('', 'AdminController@portfolio');
        Route::post('/insert', 'AdminController@portfolioInsert');

        Route::get('/edit/{id}', 'AdminController@portfolioEdit');
        Route::post('/update', 'AdminController@portfolioUpdate');
        Route::post('/delete', 'AdminController@portfolioDelete');

    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
