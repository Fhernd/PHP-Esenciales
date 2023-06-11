<?php

$archivoPedidos = fopen("pedidos.txt", "r") or
  die("No se pudo abrir el archivo");


while (!feof($archivoPedidos)) {
    $linea = fgets($archivoPedidos);
    $lineasalto = nl2br($linea);
    echo $lineasalto;
}
