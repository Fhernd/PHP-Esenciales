<?php

$nombre = $_REQUEST['nombre'];
$ingresosMensuales = $_REQUEST['ingresosMensuales'];

echo "El cliente $nombre tiene ingresos mensuales de $ingresosMensuales.";

if ($ingresosMensuales == "altos") {
    echo "<br>";
    echo "<br>";
    echo "Debe pagar impuestos ya que sus ingresos son altos.";
}
