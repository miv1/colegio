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
        return redirect('alumno')
                      ->with('success','alumno creado satisfactoriamente'); 
    }
    public function create()
    {
       return view ('alumnos.create');
    }   
    public function edit($id)
    {
        $alumno = Alumno::find($id);
            return view ('alumnos.edit', compact('alumno'));
    }
    public function update(Request $request,$id)
    {
        request()->validate([
            'nombre' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'ci' => 'required',
        ]);
        $alumno = Alumno::where('id',  $id)->first();
        $alumno->nombre = $request->nombre;
        $alumno->apellido_paterno = $request->apellido_paterno;
        $alumno->apellido_materno = $request->apellido_materno;
        $alumno->ci = $request -> ci;
        $alumno->save();
        $alumno->update($request->all());
          //return redirect()->route('/alumno'); 
         return redirect('alumno')
                      ->with('success','alumno actualizado satisfactoriamente'); 
    }
    public function destroy(Alumno $alumno)
    {
        //$alumno->delete();
        Alumno::destroy($alumno);       
        return redirect('alumno')
                        ->with('success','alumno eliminado satisfactoriamente');
    }
}
