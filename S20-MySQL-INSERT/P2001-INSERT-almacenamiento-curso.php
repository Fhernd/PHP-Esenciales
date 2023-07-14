<?php

$nombreCurso = $_REQUEST['nombre'];

$conexion = mysqli_connect("localhost", "root", "", "academia") or
    die("Problemas con la conexión");

mysqli_query($conexion, "INSERT INTO curso(nombre) VALUES ('$nombreCurso')")
    or die("Problemas en el INSERT" . mysqli_error($conexion));

mysqli_close($conexion);

echo "El curso fue dado de alta.";
