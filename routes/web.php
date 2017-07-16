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
Route::get('/registrarDesarrollo', 'PropiedadesController@registrarDesarrollo')->name('registrarDesarrollo');
Route::get('/editarDesarrollo/{desarrollo_id}', 'PropiedadesController@editarDesarrollo')->name('editarDesarrollo');
Route::post('/createDesarrollo', 'PropiedadesController@storeDesarrollo')->name('createDesarrollo');
Route::post('/editDesarrollo', 'PropiedadesController@editDesarrollo')->name('editDesarrollo');
Route::post('/storeSlides', 'PropiedadesController@storeSlides')->name('storeSlides');
Route::post('/deleteSlides', 'PropiedadesController@deleteSlides')->name('deleteSlides');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/log', 'HomeController@log')->name('log');
Route::get('/homelaravel', 'HomeController@homelaravel')->name('homelaravel');


Route::post('/solicitarinfo', 'PropiedadesController@solicitarinfo')->name('solicitarinfo');
