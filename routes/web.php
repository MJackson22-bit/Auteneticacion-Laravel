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
Route::post('aulas/edit/{id}', 'App\Http\Controllers\AulaController@update')->middleware('auth');
Route::post('clases/edit/{id}', 'App\Http\Controllers\ClaseController@update')->middleware('auth');
Route::post('profesors/edit/{id}', 'App\Http\Controllers\ProfesorController@update')->middleware('auth');

Route::resource('impartes', 'App\Http\Controllers\ImparteController')->middleware('auth');
Route::resource('aulas', 'App\Http\Controllers\AulaController')->middleware('auth');
Route::resource('profesors', 'App\Http\Controllers\ProfesorController')->middleware('auth');
Route::resource('clases', 'App\Http\Controllers\ClaseController')->middleware('auth');

Route::get('aulas/relation/{id}', 'App\Http\Controllers\AulaController@viewRelations')->middleware('auth');
Route::get('clases/relation/{id}', 'App\Http\Controllers\ClaseController@viewRelations')->middleware('auth');
Route::get('profesors/relation/{id}', 'App\Http\Controllers\ProfesorController@viewRelations')->middleware('auth');
Route::get('aulas/delete/{id}', 'App\Http\Controllers\AulaController@destroy')->middleware('auth');
Route::get('clases/delete/{id}', 'App\Http\Controllers\ClaseController@destroy')->middleware('auth');
Route::get('profesors/delete/{id}', 'App\Http\Controllers\ProfesorController@destroy')->middleware('auth');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
