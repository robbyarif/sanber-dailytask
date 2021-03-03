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

Route::get('/', 'HomeController@get')->name('index');

Route::get('/register', 'AuthController@get_register');
Route::post('/register', 'AuthController@post_register');

Route::get('/welcome', 'AuthController@get_welcome')->name('welcome');
