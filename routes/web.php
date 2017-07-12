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

Route::get('/propiedades', 'PropiedadesController@index')->name('propiedades');
Route::get('/detail', 'PropiedadesController@detail')->name('detail');
Route::get('/desarrollo/{desarrollo_id}', 'PropiedadesController@desarrollo')->name('desarrollo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/log', 'HomeController@log')->name('log');
Route::get('/homelaravel', 'HomeController@homelaravel')->name('homelaravel');


Route::post('/solicitarinfo', 'PropiedadesController@solicitarinfo')->name('solicitarinfo');
