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
Route::resource('noticia', 'App\Http\Controllers\NoticiaController')->names('noticias')->parameters([
    'noticia' => 'noticia'
]);
Route::resource('graduado', 'App\Http\Controllers\GraduadoController')->names('graduados');
Route::resource('evento', 'App\Http\Controllers\EventoController')->names('eventos');
Route::resource('experiencia', 'App\Http\Controllers\ExperienciaController')->names('experiencias')->parameters([
    'expriencia' => 'experiencia'
]);
Route::resource('oferta', 'App\Http\Controllers\OfertaController')->names('ofertas')->parameters([
    'oferta' => 'oferta'
]);

//graduados routes
Route::get('graduado/{graduado}/picView', 'App\Http\Controllers\GraduadoController@picView')->name('picView');
Route::post('graduado/{graduado}/picView', 'App\Http\Controllers\GraduadoController@updatePic')->name('updatePic');

//noticias routes
Route::get('noticia/{noticia}/picView', 'App\Http\Controllers\NoticiaController@picView')->name('picView');
Route::post('noticia/{noticia}/picView', 'App\Http\Controllers\NoticiaController@updatePic')->name('updatePic');

//noticias routes
Route::get('evento/{evento}/picView', 'App\Http\Controllers\EventoController@picView')->name('picView');
Route::post('evento/{evento}/picView', 'App\Http\Controllers\EventoController@updatePic')->name('updatePic');

Auth::routes();