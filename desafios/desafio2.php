<?php

$multiplicador = 5;
$numero = 1;

while ($numero <= 10) {
   $resultado= $numero * $multiplicador;
   echo "$multiplicador X $numero = $resultado" . PHP_EOL;
   $numero++;
}

echo "fim";