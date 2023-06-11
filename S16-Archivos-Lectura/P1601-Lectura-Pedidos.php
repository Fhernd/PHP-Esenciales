<?php

$archivoPedidos = fopen("pedidos.txt", "r") or
  die("No se pudo abrir el archivo");


while (!feof($archivoPedidos)) {
    $linea = fgets($archivoPedidos);

    $partes = explode(";", $linea);

    echo "Este es el pedido: <br>";
    for ($i = 0; $i < count($partes); $i++) {
        echo $partes[$i] . "<br>";
    }
    echo "<br>";

    // $lineasalto = nl2br($linea);
    // echo $lineasalto;
}
