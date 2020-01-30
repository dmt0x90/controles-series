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


Route::get('/series', 'SeriesControllers@index')
  ->name('listar_series');
Route::get('/series/create', 'SeriesControllers@create')
  ->name('series_criar');
Route::post('/series/create', 'SeriesControllers@store');
Route::delete('/series/{id}', 'SeriesControllers@destroy');

Route::get('/series/{serieId}/temporadas', 'TemporadasControllers@index');
