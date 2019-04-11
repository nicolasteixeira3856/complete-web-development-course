<?php

    $funcionarios = array(
        array('nome' => 'Nicolas', 'funcao' => 'Estagiário de Desenvolvimento Web'),
        array('nome' => 'Maria', 'funcao' => 'Scrum Master'),
        array('nome' => 'Samantha', 'funcao' => 'Desenvolvedor PL')
    );

    foreach ($funcionarios as $idx => $funcionario) {
       foreach ($funcionario as $idx2 => $valor) {
           echo "$idx2 - $valor <br>";
       }
       echo '<hr>';
    }

?>