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
 route::get('/','RestoController@index');
 route::get('/list','RestoController@list');
 route::post('/add','RestoController@add');
 route::view('/add','add');
 route::get('/delete/{id}','RestoController@delete');
 route::get('/edit/{id}','RestoController@edit');
 route::post('/edit','RestoController@update');
 Route::view('/register','register');
 route::post('/register','RestoController@register');
 route::view('/login','login');
 route::post('/login','RestoController@login');
/*Route::get('/', function () {
       return view('welcome');
});
