<?php
    //getype()
    echo 'Função gettype() -> retorna o tipo da variável <br>';
    echo '<hr>';
    echo 'Possibilidades: Int -> Float, string; <br> String -> Int, string e boolean <br> Float -> int, string <br> Boolean -> Int, string. <hr>';

    $valor = 15.35;
    //$valor2 = (float) $valor; 
    $valor2 = (string) $valor; 
    //$valor2 = (int) $valor; 

    echo $valor . ' ' . gettype($valor);
    echo '<br>';
    echo $valor2 . ' ' . gettype($valor2);
?>