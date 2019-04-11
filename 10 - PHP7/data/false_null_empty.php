<?php

    /*
        False - Boolean
        Null e Empty - Valores especiais
    */

    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;

    //Valores null

    if(is_null($funcionario1)){
        echo 'É null';
    }else{
        echo 'Não é null';
    }

    echo '<br>';

    if(is_null($funcionario2)){
        echo 'É null';
    }else{
        echo 'Não é null';
    }

    echo '<br>';

    if(is_null($funcionario3)){
        echo 'É null';
    }else{
        echo 'Não é null';
    }

    echo '<hr>';

    if(empty($funcionario1)){
        echo 'É vazia';
    }else{
        echo 'Não é vazia';
    }

    echo '<br>';

    if(empty($funcionario2)){
        echo 'É vazia';
    }else{
        echo 'Não é vazia';
    }

    echo '<br>';

    if(empty($funcionario3)){
        echo 'É vazia';
    }else{
        echo 'Não é vazia';
    }
?>