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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

///USUARIOS
Route::get('/user/index', 'UserController@index')->name('user/index');
Route::post('/user/post', 'UserController@store')->name('user/post');
Route::put('/user/{user}/update', 'UserController@update')->name('user/update');
Route::delete('/user/{user}/destroy', 'UserController@destroy')->name('user/destroy');

///PRODUCTOS
Route::get('/producto/index', 'ProductoController@index')->name('producto/index');
Route::post('/producto/post', 'ProductoController@store')->name('producto/post');
Route::put('/producto/{producto}/update', 'ProductoController@update')->name('producto/update');
Route::delete('/producto/{producto}/destroy', 'ProductoController@destroy')->name('producto/destroy');
