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

Route::get('/users', 'App\Http\Controllers\UserController@search');
Route::get('/users/{id}', 'App\Http\Controllers\UserController@searchOne');
Route::post('/users', 'App\Http\Controllers\UserController@register');
