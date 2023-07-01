<html>
<head>
    <title>Problema</title>
</head>
<body>

    <?php
    function retornarPromedio($valor1, $valor2)
    {
        $promedio = ($valor1 + $valor2) / 2;
        return $promedio;
    }

    $promediorimerValor = 100;
    $segundoValor = 50;
    $promedio = retornarPromedio($promediorimerValor, $segundoValor);
    echo $promedio;
    ?>

</body>
</html>
