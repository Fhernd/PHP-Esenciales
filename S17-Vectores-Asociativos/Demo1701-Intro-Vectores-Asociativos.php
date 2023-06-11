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

