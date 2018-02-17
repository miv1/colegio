<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Alumnos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<h1>Alumnos</h1>
<ul>
    <?php foreach ($alumnos as $alumno): ?>
         <li> <?php echo $alumno?> </li>
    <?php endforeach; ?>
</ul>
    
</body>
</html>