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
    */

    Route::post('/etiqueta', 'App\Http\Controllers\EtiquetaController@store'); //create etiquetas  
    Route::get('/etiqueta', 'App\Http\Controllers\EtiquetaController@index');  // mostrar etiquetas
    Route::put('/etiqueta/{id}', 'App\Http\Controllers\EtiquetaController@update');  // update etiqueta
    Route::delete('/etiqueta/{id}', 'App\Http\Controllers\EtiquetaController@destroy');  // delete etiqueta
    
});