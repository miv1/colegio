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
Route::get('/alumno', 'AlumnoController@index');
Route::get('/alumno/{alumno}', 'AlumnoController@show')
        -> where ('alumno','[0,9]+');
       //    ->nombres('alumnos.show')
Route::get('/alumno/nuevo', 'AlumnoController@create');
Route::post('/alumno/crear', 'AlumnoController@store');
Route::get('/alumno/{id}/editar','AlumnoController@edit')->name('alumno.edit');
Route::post('/alumno/{id}', 'AlumnoController@update');
Route::delete('alumno/{id}','AlumnoController@destroy')->name('alumno.destroy');


//Route::post('/alumno', 'AlumnoController@update');
//Route::resource('materias', 'MateriasController');

//Route::get('pruebasAlumno', function(){     ; });