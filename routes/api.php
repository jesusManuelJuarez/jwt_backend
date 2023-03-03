<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('register', 'App\Http\Controllers\UserController@register');
Route::post('login', 'App\Http\Controllers\UserController@authenticate');


Route::group(['middleware' => ['jwt.verify']], function () {
    /*
    Route::post('/usuarios', 'App\Http\Controllers\UsuariosController@store'); //create datosUsuarios

    Route::get('/usuarios', 'App\Http\Controllers\UsuariosController@index');  // mostrar datosUsuarios
    Route::get('/usuarios/{id}', 'App\Http\Controllers\UsuariosController@indexId');  // mostrar datosUsuarios x id
    Route::put('/usuarios/{id}', 'App\http\Controllers\UsuariosController@update');  // update datosUsuarios
    Route::delete('/usuarios/{id}', 'App\Http\Controllers\UsuariosController@destroy');  // delete datosUsuarios

    Route::post('/proyectos', 'App\Http\Controllers\ProyectoController@store'); //create datosProyectos  
    Route::get('/proyectos', 'App\Http\Controllers\ProyectoController@index');  // mostrar datosProyectos
    Route::put('/proyectos/{id}', 'App\http\Controllers\ProyectoController@update');  // update Proyectos
    Route::delete('/proyectos/{id}', 'App\Http\Controllers\ProyectosController@destroy');  // delete datosProyectos
    */
});