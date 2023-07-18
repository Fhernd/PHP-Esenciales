<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "academia") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "SELECT codigo FROM alumno
                        WHERE correo='$_REQUEST[correo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
        mysqli_query($conexion, "DELETE FROM alumno WHERE correo='$_REQUEST[correo]'") or
            die("Problemas en el select:" . mysqli_error($conexion));
        echo "Se efectuó el borrado del alumno con dicho mail.";
    } else {
        echo "No existe un alumno con ese mail.";
    }

    mysqli_close($conexion);
    ?>
</body>

</html>