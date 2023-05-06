<?php

$nombre = $_REQUEST['nombre'];

$cantidadDeportes = count($_REQUEST['deportes']);

echo "Hola $nombre, practicas $cantidadDeportes deportes.";
