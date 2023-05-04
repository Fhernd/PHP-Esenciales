<?php

if (isset($_REQUEST['sumar'])) {
    $numero1 = intval($_REQUEST['numero1']);
    $numero2 = intval($_REQUEST['numero2']);

    $suma = $numero1 + $numero2;

    echo "La suma es $suma";
    echo "<br>";
}

if(isset($_REQUEST['restar'])) {
    $numero1 = intval($_REQUEST['numero1']);
    $numero2 = intval($_REQUEST['numero2']);

    $resta = $numero1 - $numero2;

    echo "La resta es $resta";
}
