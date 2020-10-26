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

/*Route::get('/', function () {
       return view('welcome');
});
