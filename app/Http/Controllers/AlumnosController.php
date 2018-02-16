<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index()
    {
        if(request()->has ('empty'))
        {
            $alumnos = [];            
        }
        else
        {
            $alumnos =
            ['Brian', 'Alucart', 'Felix',];
        }
        $title = 'Listado de alumnos';
        return view('alumno', compact('title', 'alumnos')); 
    }
    public function show($id)
    {
        return "Mostrando detalles del alumno: {$id}";
    }
    public function store()
    {

    }
    public function create()
    {
        return "Crear nuevo alumno:";
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
