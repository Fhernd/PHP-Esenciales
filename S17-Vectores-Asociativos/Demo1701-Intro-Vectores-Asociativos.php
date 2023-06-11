<?php

echo "Uso de vectores basados en índices numéricos<br>";

$registro[] = "20456322";
$registro[] = "Martinez Pablo";
$registro[] = "Colon 134";

echo $registro[0] . "<br>";
echo $registro[2] . "<br>";
echo $registro[1] . "<br>";

echo "<br>";
echo "<br>";

for($i=0;$i<count($registro);$i++){ // 0, 1, 2
    echo $registro[$i] . "<br>";
}

echo "<br>";
echo "<br>";

echo "Uso de vectores basados en índices asociativos<br>";

$registro2["dni"] = "20456322";
$registro2["nombre"] = "Martinez Pablo";
$registro2["direccion"] = "Colon 134";

echo $registro2["dni"] . "<br>";
echo $registro2["direccion"] . "<br>";
echo $registro2["nombre"] . "<br>";

echo "<br>";
echo "<br>";

foreach($registro2 as $clave => $valor){
    echo $clave . ": " . $valor . "<br>";
}
