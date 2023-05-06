<?php

if ($_REQUEST['operacion'] == 'sumar') {
    $numero1 = floatval($_REQUEST['numero1']);
    $numero2 = floatval($_REQUEST['numero2']);

    $suma = $numero1 + $numero2;

    echo "La suma de $numero1 más $numero2 es igual a $suma.";
} elseif ($_REQUEST['operacion'] == 'restar') {
    $numero1 = floatval($_REQUEST['numero1']);
    $numero2 = floatval($_REQUEST['numero2']);

    $resta = $numero1 - $numero2;

    echo "La resta de $numero1 menos $numero2 es igual a $resta.";
}
