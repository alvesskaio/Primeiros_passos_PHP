<?php

$idade = 16;
$pessoas = 1;

echo "Você só pode entrar a partir de 18 anos ou tiver se tiver a partir de 16 e estiver acompanhado.";

echo PHP_EOL;

if ($idade >= 18) {
        echo "você tem $idade, pode entrar";
    } else if ($idade >= 16 && $pessoas > 1){
        echo "você tem $idade, porém está acompanhado, pode entrar.";
    } else {
        echo "Você não pode entrar.";
    }

    echo PHP_EOL;

    echo 'adeus';

    