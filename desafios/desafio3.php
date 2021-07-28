<?php

//formula do imc é peso/altura
$peso = 80;
$altura= 1.90;

$resultado= $peso / $altura;
echo "O seu imc e $resultado" . PHP_EOL;

if ($resultado <= 25 ) {
        echo "VocÊ está com o imc abaixo do recomendado!";
    } elseif ($resultado >= 26 && $resultado <= 39) {
        echo "Você está com o imc normal!";
    } elseif ($resultado >= 40) {
        echo "Você está com o imc acima do recomendado!";
    }