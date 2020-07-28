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

Route::group(['prefix' => 'cinecar'], function () {

    Route::group(
        ['prefix' => 'auth'],
        function ($router) {
            Route::post('register', 'AuthController@register');
            Route::post('login', 'AuthController@login');
            Route::post('logout', 'AuthController@logout');
            Route::post('refresh', 'AuthController@refresh');
            Route::post('me', 'AuthController@me');
        }
    );


    Route::group([
        'prefix' => 'roles'
    ], function ($router) {
        Route::get('', 'RolController@index');
    });

    Route::group(['prefix' => 'peliculas'], function () {
        Route::get('', 'MovieController@index');
        Route::get('all', 'MovieController@all');
        Route::post('create', 'MovieController@create');
        Route::get('votosTop', 'MovieController@votosTop');
        Route::get('/{id}', 'MovieController@show');
        Route::put('/edit/{id}', 'MovieController@edit');
        Route::patch('/{id}', 'MovieController@update');
        Route::patch('/{id}', 'MovieController@destroy');
    });
    Route::group(['prefix' => 'votos'], function () {
        Route::patch('/{id}', 'VoteController@update');
    });
    Route::group(['prefix' => 'likes'], function () {
        Route::patch('/{id}', 'LikeController@update');
    });
    Route::group(['prefix' => 'productos'], function () {
        Route::get('', 'ProductController@index');
        Route::get('all', 'ProductController@all');
        Route::get('likesTop', 'ProductController@likesTop');
        Route::get('bebidasTop', 'ProductController@bebidasTop');
        Route::get('platillosTop', 'ProductController@platillosTop');
        Route::get('snacksTop', 'ProductController@snacksTop');
        Route::post('create', 'ProductController@create');
        Route::get('/{id}', 'ProductController@show');
        Route::put('/edit/{id}', 'ProductController@edit');
        Route::patch('/{id}', 'ProductController@update');
        Route::patch('/{id}', 'ProductController@destroy');
    });
});
