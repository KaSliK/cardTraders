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


Route::get('/', 'FrontendController@index')->name('home');



Route::group(['prefix'=> 'Auth', 'middleware' => 'auth'], function(){
    Route::get('/allCards', 'FrontendController@allCards')->name('allCards');
    Route::get('/myCards', 'FrontendController@myCards')->name('myCards');
    Route::get('/forSaleCards', 'FrontendController@forSaleCards')->name('forSaleCards');
    Route::get('/forChangeCards', 'FrontendController@forChangeCards')->name('forChangeCards');
    Route::get('/','BackendController@index')->name('adminHome');
});

Auth::routes();

