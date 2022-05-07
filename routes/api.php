<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function () {
    Route::group(['as' => 'api.v1.', 'middleware' => ['auth:api']], function () {
        Route::group(['prefix' => 'users'], function () {
            Route::get('/', 'UserController@index');
        });
    });
});
Route::get('login', [ 'as' => 'login', 'uses' => 'Api\Auth\LoginController@getLogin'])->name('login');
Route::post('login', 'Api\Auth\LoginController@postLogin');

Route::get('register',  [ 'as' => 'register', 'uses' => 'Api\Auth\RegisterController@getRegister']);
Route::post('register', [ 'as' => 'register', 'uses' => 'Api\Auth\RegisterController@postRegister']);
Route::get('logout', [ 'as' => 'logout', 'uses' => 'Api\Auth\LogoutController@getLogout']);

Route::group(['middleware' => 'jwt.auth'], function () {
    Route::get('user-info','testController@getuser');
});