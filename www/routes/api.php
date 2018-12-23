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

Route::get('me', 'AuthController@me')->middleware('auth:api');
Route::post('/register', 'AuthController@postRegister');

Route::post('/sign-in', 'AuthController@postSignIn')->name('post-sign-in');
Route::post('/logout', 'AuthController@logout');

Route::middleware('auth:api')->group(function ()
{
    //
});