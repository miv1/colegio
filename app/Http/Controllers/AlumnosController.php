<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlumnosController extends Controller
{
    public function index()
    {
        return view('alumno');

    }
    public function show($id)
    {
return "Mostrando detalles del alumno: {$id}"
    }
    public function store()
    {

    }
    public function create()
    {

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
