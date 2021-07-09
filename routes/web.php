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
    return view('test');
});

Route::get('administracion/usuarios', 'Admin\UsersController@index');
Route::get('administracion/usuarios/{user}', 'Admin\UsersController@show');


// Gestión
    // tickets
    // asignacion

// configuración
    // tipos
    // prioridades
// Reportes
    // nuevos creados
    // pendientes
// Administación
    // roles
    // permisos
    // usuarios
