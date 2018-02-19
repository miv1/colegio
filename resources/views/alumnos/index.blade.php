
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
<li> <?php echo $alumno->nombre?>  </li> 
<?php endforeach; ?>
    <table>
        <th> nombre </th>
        @foreach($alumnos as $alumno)
        <td>
        {{$alumno->nombre}}
        </td>
    @endforeach
    </table>
    
</body>
</html>