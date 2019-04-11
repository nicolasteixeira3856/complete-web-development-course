<?php

    $registros = array (
        array('titulo' => 'Título Notícia 1', 'conteudo' => 'Conteúdo notícia 1'),
        array('titulo' => 'Título Notícia 2', 'conteudo' => 'Conteúdo notícia 2'),
        array('titulo' => 'Título Notícia 3', 'conteudo' => 'Conteúdo notícia 3')
    );

    $idx = 0;

    while ($idx < count($registros)){
        echo '<h3>' . $registros[$idx]['titulo'] . '</h3>';
        echo '<p>' . $registros[$idx]['conteudo'] . '</p>';
        echo '<hr>';

        $idx++;

    }

?>