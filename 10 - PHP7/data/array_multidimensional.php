<?php

    $lista_coisas = [];

    $lista_coisas['frutas'] = array('Banana', 'Maça', 'Morango', 'Uva');
    $lista_coisas['pessoas'] = array('Nicolas', 'Tiago', 'Rodrigo', 'Luiz');

    echo '<pre>';
        print_r($lista_coisas);
    echo '</pre>';

    echo '<hr>';

    echo $lista_coisas['frutas'][3];
    echo '<br>';
    echo $lista_coisas['pessoas'][3];

?>