@extends('layouts.admin')
@section('title', "Crear alumnos")
@section('content')
<h1>Crear alumno </h1>

<form method="POST" action="{{url('alumno')}}">
{{csrf_field()}}

<label for="nombres">Nombres </label>
<input type="text" name="nombres">
<br>
<label for="apellido_paterno">Apellido paterno </label>
<input type="text" name="apellido_paterno">
<br>
<label for="apellido_materno">Apellido materno </label>
<input type="text" name="apellido_materno">
<br>
<label for="ci">ci</label>
<input type="numeric" name="ci">
<br>

<button type = "submit">Crear alumno </button>
</form>
@endsection