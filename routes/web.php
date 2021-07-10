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
    return view('index');
});
Route::post('aulas/edit/{id}', 'App\Http\Controllers\AulaController@update');
Route::post('clases/edit/{id}', 'App\Http\Controllers\ClaseController@update');
Route::post('profesors/edit/{id}', 'App\Http\Controllers\ProfesorController@update');

Route::resource('impartes', 'App\Http\Controllers\ImparteController');
Route::resource('aulas', 'App\Http\Controllers\AulaController');
Route::resource('profesors', 'App\Http\Controllers\ProfesorController');
Route::resource('clases', 'App\Http\Controllers\ClaseController');

Route::get('aulas/relation/{id}', 'App\Http\Controllers\AulaController@viewRelations');
Route::get('clases/relation/{id}', 'App\Http\Controllers\ClaseController@viewRelations');
Route::get('profesors/relation/{id}', 'App\Http\Controllers\ProfesorController@viewRelations');
Route::get('aulas/delete/{id}', 'App\Http\Controllers\AulaController@destroy');
Route::get('clases/delete/{id}', 'App\Http\Controllers\ClaseController@destroy');
Route::get('profesors/delete/{id}', 'App\Http\Controllers\ProfesorController@destroy');


