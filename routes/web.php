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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/songs','SongController@index');
Route::get('/songs/{id}','SongController@get');
Route::get('/artist','SingerController@index');
Route::get('/artist/{id}','SingerController@get');
Route::get('/album','AlbumController@index');

