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

Route::get('/', 'IndexController@index');

Route::group(
    [
        'prefix' => 'news'
    ],
    function() {
        Route::get('/', 'NewsController@all');
        Route::get('/{id}', 'NewsController@one')->where('id', '\d+');
        Route::get('/categories', 'NewsController@categories'); // я правильно назвал, или здесь надо в единственном числе?
        Route::get('/add', 'NewsController@add');
        Route::get('/categories/{slug}', 'NewsController@showCategory');
    }
);
Route::get('auth', 'AuthController@index');
