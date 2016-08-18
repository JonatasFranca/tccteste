<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'EventosController@show');


Route::group(['prefix'=>'eventos','where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>'eventos', 'uses'=>'EventosController@index']);
    Route::get('create',['as'=>'eventos.create', 'uses'=>'EventosController@create']);
    Route::post('sendEmail',['as'=>'eventos.sendEmail', 'uses'=>'EventosController@sendEmail']);
    Route::post('store',['as'=>'eventos.store', 'uses'=>'EventosController@store']);
    Route::get('{id}/destroy',['as'=>'eventos.destroy', 'uses'=>'EventosController@destroy']);
    Route::get('{id}/edit',['as'=>'eventos.edit', 'uses'=>'EventosController@edit']);
    Route::put('{id}/update',['as'=>'eventos.update', 'uses'=>'EventosController@update']);
    Route::get('erroadmin',['as'=>'eventos.erroadmin', 'uses'=>'EventosController@erroadmin']);
});
Route::group(['prefix'=>'usuario','where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>'usuario', 'uses'=>'UsuarioController@index']);
    Route::get('create',['as'=>'usuario.create', 'uses'=>'UsuarioController@create']);
    Route::post('store',['as'=>'usuario.store', 'uses'=>'UsuarioController@store']);

    
});

Route::group(['prefix'=>'matricula','where'=>['id'=>'[0-9]+']], function() {
    Route::get('',['as'=>'matricula', 'uses'=>'MatriculasController@index']);
    Route::get('/lista',['as'=>'matricula.lista', 'uses'=>'MatriculasController@lista']);
    Route::get('{id}/create',['as'=>'matricula.create', 'uses'=>'MatriculasController@create']);
    Route::post('store',['as'=>'matricula.store', 'uses'=>'MatriculasController@store']);
    Route::get('{id}/details',['as'=>'matricula.details', 'uses'=>'MatriculasController@details']);
    Route::get('{id}/cracha',['as'=>'matricula.cracha', 'uses'=>'MatriculasController@cracha']);
    Route::get('{id}/chamada',['as'=>'matricula.chamada', 'uses'=>'MatriculasController@chamada']);
    Route::get('{id}/presenca',['as'=>'matricula.presenca', 'uses'=>'MatriculasController@presenca']);
    Route::get('/pdf',['as'=>'matricula.pdf', 'uses'=>'MatriculasController@pdf']);
    Route::get('{id}/edit',['as'=>'matricula.edit', 'uses'=>'MatriculasController@edit']);
    Route::put('{id}/update',['as'=>'matricula.update', 'uses'=>'MatriculasController@update']);
    
  
});
Route::group(['prefix'=>'admin','middleware' => 'auth','where'=>['id'=>'[0-9]+']], function() {


});


Route::resource('/mail','EventosController@sendEmail');

Route::auth();

Route::get('/home', 'HomeController@index');


