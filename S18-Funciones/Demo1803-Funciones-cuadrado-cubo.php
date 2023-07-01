<html>

<head>
    <title>Problema</title>
</head>

<body>
    <?php
    function calcularCuadradoCubo($valor, &$cuadrado, &$cubo)
    {
        $cuadrado = $valor * $valor;
        $cubo = $valor * $valor * $valor;
    }

    calcularCuadradoCubo(2, $c1, $c2);
    
    echo "El cuadrado de 2 es:" . $c1 . "<br>";
    echo "El cubo de 2 es:" . $c2;
    ?>
</body>

</html>