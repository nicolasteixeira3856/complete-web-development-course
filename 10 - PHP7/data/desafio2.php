<?php

    //Crie uma função para calcular o imposto de renda a ser pago com base em um salário passado por parametro

    function calcularIR($salario){
        $resultado;

        if($salario <= 1903.98){
            return 0;
        } else if($salario >= 1903.99 && $salario <= 2826.65){
            $resultado = ($salario * 7.5) / 100;
            return $resultado;
        }else if($salario >= 2826.66 && $salario <= 3751.05){
            $resultado = ($salario * 15) / 100;
            return $resultado;
        }else if($salario >= 3751.06 && $salario <= 4664.68){
            $resultado = ($salario * 22.5) / 100;
            return $resultado;
        }else{
            $resultado = ($salario * 27.5) / 100;
            return $resultado;
        }
    }

    echo "O valor do IR a ser pago é: " . calcularIR(1903.99);

?>