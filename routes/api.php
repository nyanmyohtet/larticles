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

// Get Articles
Route::get('/articles', 'ArticleController@index');

// Get Articles
Route::get('/article/{id}', 'ArticleController@show');

// Create Article
Route::post('/article', 'ArticleController@store');

// Update Article
Route::put('/article', 'ArticleController@update');

// Delete Article
Route::delete('/article/{id}', 'ArticleController@destory');
