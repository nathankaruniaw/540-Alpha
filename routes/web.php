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

Route::get('/news','MainController@newslist');

Route::get('/news_details/{id}','MainController@newsdetail');

Route::get('/news/load-more/{count}', 'MainController@newsLoadMore');

Route::post('/send_email_user', 'MainController@sendEmailUser');

Route::prefix('/admin')->middleware('auth')->group(function(){

    Route::get('', 'AdminController@dashboard')->name('admin');
    
    Route::prefix('/email')->group(function(){
        
        Route::get('', 'AdminController@email');
        Route::get('/getData', 'AdminController@emailGetData');
    });


    Route::prefix('/product')->group(function(){

        Route::get('', 'AdminController@product');
        Route::get('/getData', 'AdminController@productGetData');
        Route::post('/insert', 'AdminController@productInsert');

        Route::get('/edit/{id}', 'AdminController@editProduct');
        Route::post('/update', 'AdminController@updateProduct');
        Route::post('/delete', 'AdminController@deleteProduct');

    });

    Route::prefix('/news')->group(function(){

        Route::get('', 'AdminController@news');
        Route::post('/insert', 'AdminController@newsInsert');

        Route::get('/edit/{id}', 'AdminController@editNews');
        Route::post('/update', 'AdminController@updateNews');
        Route::post('/delete', 'AdminController@deleteNews');

    });

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
