<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/user', 'UserController@index')->name("home");
Route::get('/user/show/{id}', 'UserController@show');
Route::get('/user/create', 'UserController@create');
Route::get('/user/edit/{id}', 'UserController@edit');
Route::put('/user/update/{id}', 'UserController@update');
Route::post('/user/store', 'UserController@store')->name("home");
Route::delete('/user/destroy/{id}', 'UserController@destroy')->name("home");

