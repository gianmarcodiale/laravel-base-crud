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

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Creo la rotta per la pagina index
Route::get('/comics', 'ComicController@index')->name('comics.index');
//Creo la rotta per il create
Route::get('/comics/create', 'ComicController@create')->name('comics.create');
//Creo la rotta per lo store
Route::post('/comics', 'ComicController@store')->name('comics.store');
//Creo la rotta per lo show
Route::get('/comics/{comic}', 'ComicController@show')->name('comics.show');
//Creo la rotta per l'edit
Route::get('/comics/{comic}/edit', 'ComicController@edit')->name('comics.edit');
//Creo la rotta per l'update
Route::put('/comics/{comic}', 'ComicController@update')->name('comics.update');



