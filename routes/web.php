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

Route::get('/create', function () {
    return view('posts.create');
});

Route::get('/home', 'PostController@index');
Route::post('/add', 'PostController@add');
Route::get('/read/{id}', 'PostController@read');
Route::get('/update/{id}', 'PostController@update');
Route::post('/edit/{id}', 'PostController@edit');
Route::get('/delete/{id}', 'PostController@delete');
