<html>

<head>
    <title>Problema</title>
</head>

<body>

    <?php
    function mostrarTitulo($mensaje)
    {
        echo '<h1 style="text-align:center">';
        echo $mensaje;
        echo '</h1>';
    }

    mostrarTitulo("Primer titulo");
    echo "<br>";
    mostrarTitulo("Segundo segundo");

    echo "<br>";

    mostrarTitulo("Tercer titulo");

    ?>

</body>

</html>