<?php

$idade = 16;
$pessoa = 2;

echo "Só e permitida a entra a partir de 18 anos ou tendo 16 anos e estando acompanhado!" . PHP_EOL;

if ($idade >= 18) {
    echo "Você possui $idade, pode entrar";
} elseif ($idade >= 16 && $pessoa > 1) {
    echo "Você possui $idade e esta acompanhado, pode entrar!";
} else {
     echo "Você tem $idade, você não podera entrar!";
}

echo PHP_EOL;

echo "adeus";