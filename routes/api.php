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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Api\UsersController@register');
Route::post('login', 'Api\UsersController@authenticate');

Route::group([
    'prefix' => 'v0',
    'middleware' => ['jwt.verify']
], function() {
    // Categories Routes
    Route::get('categories', 'Api\CategoriesController@index');
    Route::get('categories/{category}', 'Api\CategoriesController@show');
    Route::get('categories/reports/popular', 'Api\CategoriesController@popular');
    Route::post('categories', 'Api\CategoriesController@store');
    Route::put('categories/{category}', 'Api\CategoriesController@update');
    Route::delete('categories/{category}', 'Api\CategoriesController@destroy');


    // Articles Routes
    Route::get('articles', 'Api\ArticlesController@index');
    Route::get('articles/page', 'Api\ArticlesController@articlesPaginated');
    Route::get('articles/reports/popular', 'Api\ArticlesController@popular');
    Route::get('articles/{article}', 'Api\ArticlesController@show');
    Route::post('articles', 'Api\ArticlesController@store');
    Route::put('articles/{article}', 'Api\ArticlesController@update');
    Route::delete('articles/{article}', 'Api\ArticlesController@destroy');
});
