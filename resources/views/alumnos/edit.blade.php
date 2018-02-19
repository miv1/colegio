@extends('layouts.admin')
@section('title', "Agregar alumnos")
@section('content')
<h1>Editar alumno </h1>

 <!-- <form method="POST" action="{{url('alumnos/create') }}">
 {{csrf_field()}}
<button type = "submit">Crear alumno </button>
</form>  -->
 <form method="POST" action="{{url('alumno/'.$alumno->id)}}">
{{csrf_field()}}

<label for="nombres">Nombres </label>
<input type="text" name="nombre" id="nombre" value = "{{old ('nombre', $alumno->nombre)}}">
<br>
<label for="apellido_paterno">Apellido paterno </label>
<input type="text" name="apellido_paterno" id="apellido_paterno" value = "{{old ('apellido_paterno', $alumno->apellido_paterno)}}">
<br>
<label for="apellido_materno">Apellido materno </label>
<input type="text" name="apellido_materno" id="apellido_materno" value = "{{old ('apellido_materno', $alumno->apellido_materno)}}">
<br>
<label for="ci">ci</label>
<input type="numeric" name="ci" value = "{{old ('ci', $alumno->ci)}}">
<br>

<button type = "submit">Actualizar alumno </button>
</form>
<p>
</p> 
@endsection