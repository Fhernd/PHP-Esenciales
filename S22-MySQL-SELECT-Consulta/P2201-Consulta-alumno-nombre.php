<?php

$conexion = mysqli_connect("localhost", "root", "", "academia") or
    die("Problemas con la conexión");

$nombre = $_REQUEST['nombre'];

$sql = "SELECT codigo, nombre, correo, codigo_curso FROM alumno WHERE nombre LIKE '%$nombre%'";

$registros = mysqli_query($conexion, $sql) or
    die("Problemas en el select:" . mysqli_error($conexion));

while ($reg = mysqli_fetch_array($registros)) {
    echo "Codigo:" . $reg['codigo'] . "<br>";
    echo "Nombre:" . $reg['nombre'] . "<br>";
    echo "Mail:" . $reg['correo'] . "<br>";
    echo "Curso:";
    switch ($reg['codigo_curso']) {
        case 1:
            echo "PHP";
            break;
        case 2:
            echo "ASP";
            break;
        case 3:
            echo "JSP";
            break;
    }
    echo "<br>";
    echo "<hr>";
}
