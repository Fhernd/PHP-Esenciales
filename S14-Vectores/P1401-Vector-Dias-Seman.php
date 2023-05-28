<?php

// Definir un vector con los nombres de los días de la semana. Luego imprimir el primero y el último elemento del vector.

$dias = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");

echo $dias[0] . "<br>";
echo $dias[6] . "<br>"; // Otra forma de hacerlo: echo $dias[count($dias)-1] . "<br>";
