<?php

$idade = 17;
$pessoas = 2;

 echo "Só é permitida a entra de pessoas com mais de 18 anos ou acima de 16 anos acompanhadas! Quantos anos você tem?" . PHP_EOL;

if ($idade >= 18) {
    echo "Sua idade e de $idade anos, você pode entrar.";
} else if ($pessoas > 1 && $idade >= 16) {
    echo "Você não tem idade suficiente, porêm com $idade, você pode entrar acompanhado";
} else {
    echo "Você não possui idade Para entrar!";
}