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
<<<<<<< HEAD
Route::get('/alumno', 'AlumnosController@index');
Route::get('/alumno/{$id}', 'AlumnoController@show')-> where ('id');
//Route::get('/alumno/{$id}', 'AlumnoController@create')-> where ('id')
=======
Route::get('/alumno', 'AlumnoController@index');
Route::get('/alumno/{alumno}', 'AlumnoController@show')
        -> where ('alumno','[0,9]+');
       //    ->nombres('alumnos.show')
Route::get('/alumno/nuevo', 'AlumnoController@create');
Route::post('/alumno/crear', 'AlumnoController@store');
>>>>>>> d82f326e4d32745b1087369bccf006d2bae6f3aa
//Route::resource('materias', 'MateriasController');

//Route::get('pruebasAlumno', function(){     ; });