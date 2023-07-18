<?php

$nombre = $_REQUEST['nombre'];

$conexion = mysqli_connect('localhost', 'root', '', 'academia') or
    die('Problemas con la conexión');

$resultado = mysqli_query($conexion, "SELECT codigo FROM curso WHERE nombre = '$nombre'") or
    die('Problemas en el select' . mysqli_error($conexion));

if ($reg = mysqli_fetch_array($resultado)) {
    $sql = "DELETE FROM curso WHERE nombre = '$nombre'";
    
    mysqli_query($conexion, $sql) or
        die('Problemas en el select' . mysqli_error($conexion));
    echo "Se ha eliminado el curso con dicho nombre.";
} else {
    echo "No existe un curso con ese nombre.";
}
