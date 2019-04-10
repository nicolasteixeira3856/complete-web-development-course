<?php
    $nome = 'Nícolas Teixeira';

    $curso_superior = 'Tecnologia em Análise e Desenvolvimento de Sistemas';
    $local_superior = "Universidade Federal do Paraná";

    $ensino_técnico = "Técnico em Informática";
    $local_técnico = 'SENAI';

    $texto = "Estou vendo aqui que o criador desse código se chama $nome, estuda $curso_superior na $local_superior e é formado em $ensino_técnico na instituição $local_técnico...";
    echo $texto;

    echo '<hr>';
    echo '<h3>Funções nativas para manipular strings</h3>';
    echo strtolower($texto);
    echo '<hr>';
    echo strtoupper($texto);
    echo '<hr>';
    echo ucfirst($texto);
    echo '<hr>';
    echo strlen($texto);
    echo '<hr>';

    echo str_replace('Técnico em Informática', 'Técnico em Informática com Ênfase em Programação', $texto);
    echo '<hr>';

    echo substr($texto, 0, 70);
?>