<?php

    //Sequenciais (Numéricos)
    //$lista_frutas = array('Banana', 'Maça', 'Morango', 'Uva');
    $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

    echo 'Arrays Sequenciais <hr>';

    echo '<pre>';
        print_r($lista_frutas);
    echo '</pre>';

    echo '<br>';
    echo "Segundo item do Array -> $lista_frutas[1]";

    echo '<hr><br> Arrays Associativos <hr>';

    //Associativos
    $lista_pecas = ['a' => 'SSD M.2', 'b' => 'Ram', 'c' => 'CPU', 'd' => 'VGA'];

    echo '<pre>';
        print_r($lista_pecas);
    echo '</pre>';

    echo "Segundo item do Array -> $lista_pecas[b]";;

?>