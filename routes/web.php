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
//Route::get('/intranet', function(){ return view('users.index'); });

//Route::get('/pruebas', function() { return "hola mundo"; });

//Route::get('/registros/nuevo', 'RegisterController@store');
Route::get('/intranet', 'RegisterController@index');
Route::post('/registros/nuevo', 'RegisterController@store')->name('registros.add');
Route::put('/registros/editar/{register}', 'RegisterController@update')->name('registros.edit');
Route::post('/documentos/nuevo', 'AttachmentController@store')->name('documento.add');
