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

Route::get('/board', 			'BoardController@board');

Route::get('/', 				'PagesController@index');
Route::view('/create', 			'UsersController@create');
Route::post('/posts', 			'UsersController@save');
Route::get('/users/{user}', 	'PagesController@confirm');
Route::post('/delete', 			'UsersController@delete');
