<?php

    ///Recuperação da data atual
    echo date_default_timezone_get() . " -> Alterado em meu PHP.ini para America/Sao_Paulo em date.timezone";
    echo '<br>';
    echo date('d/m/Y - H:i');
    echo '<hr>';
    date_default_timezone_set('America/Sao_Paulo');
    echo date_default_timezone_get();
    echo '<br>';
    echo date('d/m/Y - H:i');
    echo '<br>';
    echo '<br>';
    echo '<hr>';

    echo 'Calculando datas <br>';
    $data_inicial = '2019-04-09';
    $data_final = '2019-08-05';
    //Timestamp 01/01/1970 -- 2018-04-09 (JS -> Milisegundos / PHP -> Segundos)

    $time_inicial = strtotime($data_inicial);
    $time_final = strtotime($data_final);


    echo $data_inicial . '-' . $time_inicial;
    echo '<br>';
    echo $data_final . '-' . $time_final;

    $diferenca_times = $time_final - $time_inicial; //abs - valor absoluto positivo 

    echo '<br>';
    echo 'A diferença de segundos entre a data inicial e final é ' . $diferenca_times;

    $segundos_existem_dia = 24 * 60 * 60;

    echo '<br>';
    echo "Um dia possui $segundos_existem_dia segundos";

    $diferenca_dias_datas = $diferenca_times / $segundos_existem_dia;

    echo '<br>';
    echo "A diferença em dias é $diferenca_dias_datas";

?>