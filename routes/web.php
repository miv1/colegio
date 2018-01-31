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
    return 'Hola mundo';
});
Route::get('/alumno', 'AlumnosController@index');
Route::get('/alumno/{$id}', 'AlumnoController@show')-> where ('id')
Route::resource('materias', 'MateriasController');

Route::get('pruebasAlumno', function(){
    ;
});