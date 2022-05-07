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
    return view('welcome');
});

// Route::get('login', [ 'as' => 'login', 'uses' => 'Api\Auth\LoginController@getLogin']);
// Route::post('login', 'Api\Auth\LoginController@postLogin');

// Route::get('register',  [ 'as' => 'register', 'uses' => 'Api\Auth\RegisterController@getRegister']);
// Route::post('register', [ 'as' => 'register', 'uses' => 'Api\Auth\RegisterController@postRegister']);

// Route::get('logout', [ 'as' => 'logout', 'uses' => 'Api\Auth\LogoutController@getLogout']);
