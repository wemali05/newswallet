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

Route::group([
    'prefix' => 'v0'
], function() {
    Route::get('articles', 'Api\ArticleController@index');
    Route::get('articles/{article}', 'Api\ArticleController@show');
    Route::post('articles', 'Api\ArticleController@store');
    Route::put('articles/{article}', 'Api\ArticleController@update');
    Route::delete('articles/{article}', 'Api\ArticleController@delete');
});
