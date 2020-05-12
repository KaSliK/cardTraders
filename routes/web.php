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
use Illuminate\Support\Facades\Http;

Route::get('/', 'FrontendController@index')->name('home');

Route::get('/example', function()
{
    $response = Http::post('http://ct.zobacztu.pl/api/users/register', [
        'name' => 'exam@exam.pl',
        'email' => 'exam@exam.pl',
        'password' => 'exam@exam.pl',
        'c_password' => 'exam@exam.pl',
    ]);

    dd($response->json());

});
Route::post('/login_api', 'LogController@Login')->name('login_api');
Route::get('/example2', function()
{
    $response = Http::post('http://ct.zobacztu.pl/api/login', [
        'email' => 'exam@exam.pl',
        'password' => 'exam@exam.pl',
    ]);


    dd($response->json());

});

Route::get('/user_details', function()
{

    $response = Http::withHeaders([
        'Authorization' => 'Bearer '.session('token'),
        ])
    ->post('http://ct.zobacztu.pl/api/users/details');

    dd($response->json());

});

Route::group(['prefix'=> 'Auth', 'middleware' => 'auth'], function(){
    Route::get('/allCards', 'FrontendController@allCards')->name('allCards');
    Route::get('/myCards', 'FrontendController@myCards')->name('myCards');
    Route::get('/forSaleCards', 'FrontendController@forSaleCards')->name('forSaleCards');
    Route::get('/forChangeCards', 'FrontendController@forChangeCards')->name('forChangeCards');
    Route::get('/','BackendController@index')->name('adminHome');


});

Auth::routes();

