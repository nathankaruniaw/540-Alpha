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

<<<<<<< HEAD
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

=======
// Auth Laravel
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');

// Non Admin
Route::get('/','DashboardController@dashboard');
Route::get('/portfolio','DashboardController@portfolio');
Route::get('/get-advisory/{count}','DashboardController@getAdvisory');


// Admin
Route::prefix('/admin')->middleware('auth')->group(function(){

    Route::get('', 'AdminController@dashboard')->name('admin');

    Route::prefix('/client')->group(function(){

        Route::get('', 'AdminController@client');
        Route::post('/insert', 'AdminController@clientInsert');
        Route::get('/edit/{id}', 'AdminController@editClient');
        Route::post('/update', 'AdminController@updateClient');
        Route::post('/delete', 'AdminController@deleteClient')->name('delete_client');

    });
    
    Route::prefix('/portfolio')->group(function(){
    
        Route::get('', 'AdminController@portfolio');
        Route::post('/insert', 'AdminController@portfolioInsert');
        Route::get('/edit/{id}', 'AdminController@editPortfolio');
        Route::post('/update', 'AdminController@updatePortfolio');
        Route::post('/delete', 'AdminController@deletePortfolio')->name('delete_portfolio');
    
>>>>>>> 790c71017b79f58630e1dae63515fd8ac142e7b5
    });
});
