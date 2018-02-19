
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Alumnos</title>
</head>
<body>
    <h1>  Alumnos  </h1>
    <?php foreach ($alumnos as $alumno):?>
<li> <?php echo $alumno->nombre, " ", $alumno->apellido_paterno, " ", $alumno->apellido_materno?> | <a href="{{route('alumno.edit', $alumno) }}">Editar</a>

<form action ="{{route('alumno.destroy', $alumno)}}" method="POST">
{{csrf_field('DELETE')}}
<button type = "submit" > Eliminar </button>
</form>
</li>
<?php endforeach; ?>
   
</body>
</html>