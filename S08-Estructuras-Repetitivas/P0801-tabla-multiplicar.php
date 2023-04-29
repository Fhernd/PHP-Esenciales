<?php

echo 'Tabla de Multiplicar del Número 2';
echo '<br>';
echo '<br>';

$numero = 2;

echo 'Con el ciclo for:';
echo '<br>';

for($i = 1; $i <= 10; ++$i) {
  echo "$numero x $i = " . ($numero * $i);
  echo '<br>';
}

echo '<br>';

echo 'Con el ciclo while:';
echo '<br>';

$inicio = 1;
while($inicio <= 10) {
  echo "$numero x $inicio = " . ($numero * $inicio);
  echo '<br>';

  ++$inicio;
}

echo '<br>';

echo 'Con el ciclo do...while:';
echo '<br>';

$inicio = 1;

do {
  echo "$numero x $inicio = " . ($numero * $inicio);
  echo '<br>';

  ++$inicio;
} while ($inicio <= 10);
