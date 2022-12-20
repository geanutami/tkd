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

Route::get('/', 'TkdController@index');
Route::get('/data', 'TkdController@data')->name('data');
Route::get('/inputsoal', 'TkdController@input');
Route::Post('/simpan', 'TkdController@simpan')->name('post.simpan');
Route::get('/tampildata/{id}', 'TkdController@tampil');
Route::Post('/update', 'TkdController@update')->name('update');
Route::get('/delete', 'TkdController@delete')->name('delete');
