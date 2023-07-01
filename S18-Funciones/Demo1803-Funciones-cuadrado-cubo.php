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

    $cuadrado = 0;
    $cubo = 0;

    echo "El valor de la variable cuadrado antes de invocar la funcion es: " . $cuadrado . "<br>";
    echo "El valor de la variable cubo antes de invocar la funcion es: " . $cubo . "<br>";

    calcularCuadradoCubo(2, $cuadrado, $cubo);
    
    echo "El cuadrado de 2 es:" . $cuadrado . "<br>";
    echo "El cubo de 2 es:" . $cubo;
    ?>
</body>

</html>