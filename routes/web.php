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

// Rutas para desarrollos
Route::get('/desarrollo/{desarrollo_id}', 'PropiedadesController@desarrollo')->name('desarrollo');
Route::get('/registrarDesarrollo', 'PropiedadesController@registrarDesarrollo')->name('registrarDesarrollo');
Route::get('/editarDesarrollo/{desarrollo_id}', 'PropiedadesController@editarDesarrollo')->name('editarDesarrollo');
Route::post('/createDesarrollo', 'PropiedadesController@storeDesarrollo')->name('createDesarrollo');
Route::post('/editDesarrollo', 'PropiedadesController@editDesarrollo')->name('editDesarrollo');
Route::post('/storeSlides', 'PropiedadesController@storeSlides')->name('storeSlides');
Route::post('/deleteSlides', 'PropiedadesController@deleteSlides')->name('deleteSlides');

// Rutas para propiedades
Route::get('/propiedad/{propiedad_id}', 'PropiedadesController@propiedad')->name('propiedad');
Route::get('/registrarPropiedad', 'PropiedadesController@registrarPropiedad')->name('registrarPropiedades');
Route::get('/editarPropiedad/{propiedad_id}', 'PropiedadesController@editarPropiedad')->name('editarPropiedad');
Route::post('/createPropiedad', 'PropiedadesController@storePropiedad')->name('createPropiedad');
Route::post('/editPropiedad', 'PropiedadesController@editPropiedad')->name('editPropiedad');
Route::get('searchPropiedades', ['as' => 'searchPropiedades', 'uses' => 'PropiedadesController@searchPropiedades']);
Route::get('/searchQuickly/{campo}/{parametro}', 'PropiedadesController@searchQuickly')->name('searchQuickly');
Route::get('/statusPro/{propiedad_id}/{status_pro}', 'PropiedadesController@statusPro')->name('statusPro');
Route::get('/portadaSlide/{propiedad_id}/{slide_id}/{portada}', 'PropiedadesController@portadaSlide')->name('portadaSlide');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about')->name('about');
Route::get('/log', 'HomeController@log')->name('log');
Route::get('/homelaravel', 'HomeController@homelaravel')->name('homelaravel');
Route::get('/usersList', 'HomeController@usersList')->name('usersList');
Route::get('/userStatus/{user_id}/{status}', 'HomeController@userStatus')->name('userStatus');

Route::post('/solicitarinfo', 'PropiedadesController@solicitarinfo')->name('solicitarinfo');
