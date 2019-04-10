<?php

    //Função tipo void
    function exibirBoasBindas(){
        echo "Bem vindo ao curso de PHP";
    }

    exibirBoasBindas();

    echo '<br><hr>';

    //Função com retorno
    function calcularAreaTerreno($largura, $comprimento){
        $area = $largura * $comprimento;
        return $area;
    }

    echo 'O resultado do cálculo da área da função calcularAreaTerreno é: ' . calcularAreaTerreno(25, 25);

?>