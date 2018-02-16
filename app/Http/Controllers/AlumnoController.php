<?php

namespace App\Http\Controllers;

use \App\Alumno;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
       //$alumnos = DB::table('alumnos')->get();
        $alumnos = Alumno::all();
        //return $alumnos;
               //dd($alumnos);
       $titulo = 'Alumnos';
        return view('alumnos.alumnos', compact('title', 'alumnos'));
  
    }
    public function show(Alumno $alumno)
    {
        dd($alumno);
       return view('alumnos.show', compact('alumno'));
    }    

    public function store()
    {
        $data =request()->all();
        Alumno::create
        ([
            'nombres' =>  $data['nombres'],
            'apellido_paterno' =>  $data['apellido_paterno'],
            'apellido_materno' =>  $data['apellido_materno'],
            'ci' =>  $data['ci']
        ]);
        return redirect()->route('alumnos.alumno' );
    }
    public function create()
    {
        //return 'hola';
       return view ('alumnos.create');
    }   
    public function edit()
    {

    }
    public function update()
    {

    }
    public function destroy()
    {

    }
}
