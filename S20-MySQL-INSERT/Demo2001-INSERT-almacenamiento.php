<html>
<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "academia") or
        die("Problemas con la conexión");

    mysqli_query($conexion, "insert into alumno(nombre, correo, codigo_curso) values 
                       ('$_REQUEST[nombre]', '$_REQUEST[correo]', $_REQUEST[codigoCurso])")
        or die("Problemas en el select" . mysqli_error($conexion));

    mysqli_close($conexion);

    echo "El alumno fue dado de alta.";
    ?>
</body>

</html>