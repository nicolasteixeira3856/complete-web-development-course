<?php


    $itens = array('Sofá', 'Mesa', 'Cadeira', 'Fogão', 'Geladeira');

    foreach ($itens as $item) {
        echo "$item";

        if ($item == 'Mesa'){
            echo ' (*Compre uma mesa e ganhe 25% de desconto na compra de 4 cadeiras)';
        }

        echo '<br>';
    }


?>
