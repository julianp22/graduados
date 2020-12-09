<?php

use Illuminate\Support\Facades\Route;
use App\Models\Noticia;
use App\Models\Evento;
use App\Models\Graduado;
use App\Models\Experiencia;

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

//home view
Route::view('/', 'home', 
    ['primernoticia' => Noticia::latest()->first(),
     'noticias' => Noticia::orderBy('created_at', 'desc')->get(),
     'eventos' => Evento::orderBy('created_at', 'desc')->get(),
     'graduados' => Graduado::orderBy('created_at', 'desc')->get(),
     'experiencias' => Experiencia::orderBy('created_at', 'desc')->get()])
     ->name('home');

//resource routes
Route::resource('noticia', 'App\Http\Controllers\NoticiaController')->names('noticias')->parameters([
    'noticia' => 'noticia'
]);
Route::resource('graduado', 'App\Http\Controllers\GraduadoController')->names('graduados');
Route::resource('evento', 'App\Http\Controllers\EventoController')->names('eventos');
Route::resource('experiencia', 'App\Http\Controllers\ExperienciaController')->names('experiencias')->parameters([
    'experiencia' => 'experiencia'
]);
Route::resource('oferta', 'App\Http\Controllers\OfertaController')->names('ofertas')->parameters([
    'oferta' => 'oferta'
]);

//graduados routes
Route::get('graduado/{graduado}/picView', 'App\Http\Controllers\GraduadoController@picView')->name('picViewGrad');
Route::post('graduado/{graduado}/picView', 'App\Http\Controllers\GraduadoController@updatePic')->name('updatePicGrad');

//noticias routes
Route::get('noticia/{noticia}/picView', 'App\Http\Controllers\NoticiaController@picView')->name('picViewNoti');
Route::post('noticia/{noticia}/picView', 'App\Http\Controllers\NoticiaController@updatePic')->name('updatePicNoti');

//eventos routes
Route::get('evento/{evento}/picView', 'App\Http\Controllers\EventoController@picView')->name('picViewEvent');
Route::post('evento/{evento}/picView', 'App\Http\Controllers\EventoController@updatePic')->name('updatePicEvent');

//auth routes
Auth::routes();