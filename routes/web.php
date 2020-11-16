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

Route::view('/', 'home')->name('home');

//resource routes
Route::resource('noticia', 'App\Http\Controllers\NoticiaController')->names('noticias');
Route::resource('graduado', 'App\Http\Controllers\GraduadoController')->names('graduados');
Route::resource('evento', 'App\Http\Controllers\EventoController')->names('eventos');
Route::resource('experiencia', 'App\Http\Controllers\ExperienciaController')->names('experiencias');
Route::resource('oferta', 'App\Http\Controllers\OfertaController')->names('ofertas');

Route::view('/contacto', 'contact')->name('contact');
//Route::post('contact', 'MessageController@store')->name('messages.store');

Auth::routes();