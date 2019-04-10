<?php

    $numero = 7.75;

    echo "Funções nativas matemática - O valor original do número é: $numero <hr>";

    echo 'Ceil ' . ceil($numero) . ' Arredondando o valor para cima <br>';
    echo 'Floor ' . floor($numero) . ' Arredondando o valor para baixo <br>';
    echo 'Round ' . round($numero) . ' Arredondando o valor com base nas casas decimais <br>';
    echo 'Rand ' . rand(5, 25) . ' Gerando numero inteiro aleatorio com intervalo entre 5 e 25 <br>';
    echo 'Sqrt ' . sqrt($numero) . ' Retorna raiz quadrada <br>';
?>