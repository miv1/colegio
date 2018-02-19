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
        return view('alumnos.index', compact('title', 'alumnos'));
  
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
            'nombre' =>  $data['nombres'],
            'apellido_paterno' =>  $data['apellido_paterno'],
            'apellido_materno' =>  $data['apellido_materno'],
            'ci' =>  $data['ci']
        ]);
        return redirect()->route('alumnos.index' );
    }
    public function create()
    {
        //return 'hola';
       return view ('alumnos.create');
    }   
    
    
    /* public function edit(Alumno $alumno) */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
            return view ('alumnos.edit', compact('alumno'));
            /* 
            ['alumno' => $alumno]); */
    }
    public function update(Request $request,Alumno $alumno)
    {
        request()->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'ci' => 'required',
        ]);
        $alumno->update($request->all());
        return view ('/');
        /*  return redirect()->route('alumnos.index'); */
                     /*   ->with('success','alumnos updated successfully'); */

    }
    public function destroy($id)
    {
        Alumno::destroy($id);
       
        return redirect()->route('alumnos.index')
                        ->with('success','alumno eliminado successfully');
    }
}
