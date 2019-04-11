<?php

    $array = array(1 => 'Nicolas', 6 => 'UFPR', 18 => 'TADS');
    $string = 'Nicolas - TADS - UFPR';

    echo 'Is array - Retorna 1 (true) ou 0 (false) ' . is_array($array);
    $array_keys = array_keys($array);
    echo '<br>';
    echo 'Array_keys - Retorna todas as chaves ou uma parte das chaves de um array ';

    echo '<pre>';
        print_r($array);
    echo '</pre>';
    echo '<pre>';
        print_r($array_keys);
    echo '</pre>';

    echo '<br>';

    echo 'sort() - organiza em ordem alfabética e ajusta o indice - True(bem sucedido)/False(falha) - ' . sort($array);

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    echo '<br>';

    $array = array(1 => 'Nicolas', 6 => 'UFPR', 18 => 'TADS');

    echo 'asort() - organiza em ordem alfabética e preserva o indice - True(bem sucedido)/False(falha) - ' . asort($array);

    echo '<pre>';
        print_r($array);
    echo '</pre>';

    echo 'count() - conta a quantidade de elementos de um array:  ' . count($array);
    echo '<br>';

    $tads = array('Eng de Software 1', 'Desenvolvimento Web 1', 'Desenvolvimento mobile');

    echo 'array_merge() - Funde um ou mais arrays:  ';
    echo '<pre>';
        print_r($tads);
    echo '</pre>';

    $resultado_merge = array_merge($array, $tads);

    echo '<pre>';
        print_r($resultado_merge);
    echo '</pre>';

    echo '<br>';
    $resultado_explode = explode('-', $string);
    echo 'explode() - Divide uma string em strings: (Sendo a string original) ' . $string . ' e a modificada (retornada como array): ';

    echo '<pre>';
        print_r($resultado_explode);
    echo '</pre>';

    echo '<br>';
    $resultad_implode = implode('-', $resultado_explode);
    echo 'implode() - Array para string: ';

    echo '<pre>';
        print_r($resultad_implode);
    echo '</pre>';
?>