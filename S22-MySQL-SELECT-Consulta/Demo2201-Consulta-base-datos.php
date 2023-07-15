<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    $conexion = mysqli_connect("localhost", "root", "", "academia") or
        die("Problemas con la conexión");

    $registros = mysqli_query($conexion, "SELECT codigo, nombre, codigo_curso
                        FROM alumno WHERE correo='$_REQUEST[correo]'") or
        die("Problemas en el select:" . mysqli_error($conexion));

    if ($reg = mysqli_fetch_array($registros)) {
        echo "Nombre:" . $reg['nombre'] . "<br>";
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
    } else {
        echo "No existe un alumno con ese mail.";
    }
    mysqli_close($conexion);
    ?>
</body>

</html>