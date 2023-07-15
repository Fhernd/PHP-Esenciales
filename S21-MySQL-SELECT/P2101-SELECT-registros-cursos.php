<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT - Cursos</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect('localhost', 'root', '', 'academia') or
        die('Problemas con la conexión');

    $registros = mysqli_query($conexion, 'SELECT codigo, nombre FROM curso') or
        die('Problemas en el SELECT: ' . mysqli_error($conexion));

    while ($r = mysqli_fetch_array($registros)) {
        echo 'Código: ' . $r['codigo'] . '<br>';
        echo 'Nombre: ' . $r['nombre'] . '<br>';
        echo '<hr>';
    }
    ?>
</body>

</html>