<?php

    //in_array()
    //array_search()

    $lista_frutas = ['Banana', 'Maça', 'Morango', 'Uva'];

    echo '<pre>';
        print_r($lista_frutas);
    echo '</pre>';

    echo '<hr>';
    echo 'O in_array retorna true ou false para o que está sendo procurado (exemplo: maça) (<b>e é case sensitive</b>) true/false -> ' . in_array('Maça', $lista_frutas);
    echo '<br>';

    echo 'Retorna o índice do valor pesquisado, caso ele exista.  (exemplo: Uva) (<b>e é case sensitive</b>) caso não encontrado = null -> ' . array_search('Uva', $lista_frutas);

    echo '<br>';
    echo '<h3>Teste com arrays multidimensionais</h3>';

    $lista_coisas = [
        'frutas' => $lista_frutas,
        'pessoas' => ['João', 'Maria']
    ];

    echo '<pre>';
        print_r($lista_coisas);
    echo '</pre>';
    echo '<br>';

    echo array_search('Morango', $lista_coisas['frutas']);
?>