<?php

$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];

$jamonYQueso = isset($_POST['jamonYQueso']);
$napolitana = isset($_POST['napolitana']);
$muzaralla = isset($_POST['muzaralla']);

$archivo = fopen("pedidos.txt", "a");

fputs($archivo, $nombre . ";");
fputs($archivo, $direccion . ";");

if ($jamonYQueso) {
    $cantidad = intval($_POST['cantidadJamonYQueso']);
    fputs($archivo, "jamonYQueso;$cantidad");
}

if ($napolitana) {
    $cantidad = intval($_POST['cantidadNapolitana']);
    fputs($archivo, "napolitana;$cantidad");
}

if ($muzaralla) {
    $cantidad = intval($_POST['cantidadMuzaralla']);
    fputs($archivo, "muzaralla;$cantidad");
}

fputs($archivo, "\n");

fclose($archivo);

echo "Pedido guardado correctamente.";
