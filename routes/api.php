<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(
    ['middleware' => 'api', 'prefix' => 'auth'],
    function ($router) {
        Route::post('register', 'AuthController@register');
        Route::post('login', 'AuthController@login');
        Route::post('logout', 'AuthController@logout');
        Route::post('refresh', 'AuthController@refresh');
        Route::post('me', 'AuthController@me');
    }
);
Route::group(['prefix' => 'moviecar'], function () {


    Route::group(['prefix' => 'peliculas'], function () {
        Route::get('', 'MovieController@index');
        Route::get('all', 'MovieController@all');
        Route::get('/{id}', 'MovieController@show');
        Route::post('create', 'MovieController@create');
        Route::put('/edit/{id}', 'MovieController@edit');
        Route::patch('/update/{id}', 'MovieController@update');
        Route::patch('/{id}', 'MovieController@destroy');
    });
    Route::group(['prefix' => 'productos'], function () {
    });
});
