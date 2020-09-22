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
    return view('index');
});
/*Armoire-шкаф*/
Route::get('/', 'AppController@index')->name('app/index');

Route::get('armoire/create','ArmoireController@create')->name('armoire.create');
Route::post('armoire/store','ArmoireController@store')->name('armoire.store');

Route::get('armoire/{id}/edit','ArmoireController@edit')->name('armoire.edit');
Route::put('armoire/{id}/update','ArmoireController@update')->name('armoire.update');

Route::get('armoire/{id}/view','ArmoireController@view')->name('armoire.view');
Route::delete('armoire/{id}/destroy','ArmoireController@destroy')->name('armoire.destroy');

/*Cell-ячейка*/

Route::get('cell/create','CellController@create')->name('cell.create');
Route::post('cell/store','CellController@store')->name('cell.store');

Route::get('cell/{id}/edit','CellController@edit')->name('cell.edit');
Route::put('cell/{id}/update','CellController@update')->name('cell.update');

Route::get('cell/{id}/view','CellController@view')->name('cell.view');
Route::delete('cell/{id}/destroy','CellController@destroy')->name('cell.destroy');

/*Folder-папка*/

Route::get('folder/create','FolderController@create')->name('folder.create');
Route::post('folder/store','FolderController@store')->name('folder.store');

Route::get('folder/{id}/edit','FolderController@edit')->name('folder.edit');
Route::put('folder/{id}/update','FolderController@update')->name('folder.update');

Route::get('folder/{id}/view','FolderController@view')->name('folder.view');
Route::delete('folder/{id}/destroy','FolderController@destroy')->name('folder.destroy');

Route::get('folder/search','FolderController@search')->name('folder.search');

/*File-файл*/

Route::get('file/create','FileController@create')->name('file.create');
Route::post('file/store','FileController@store')->name('file.store');

Route::get('file/{id}/edit','FileController@edit')->name('file.edit');
Route::put('file/{id}/update','FileController@update')->name('file.update');

Route::delete('file/{id}/destroy','FileController@destroy')->name('file.destroy');

