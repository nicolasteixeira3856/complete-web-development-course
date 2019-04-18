<?php

    try {
        echo '<h3> ** Try ** </h3>';

        /*$sql = 'Select * from clientes';
        mysql_query($sql);*/ //Erro

        if(!file_exists('require_arquivo_a.php')){
            throw new Exception('O arquivo em questão não está disponível.'. date(' m.d.y'));
        }

    } catch(Error $e) {
        echo '<h3 style="color: red;"> ** Catch - : ' . $e . ' ** </h3>';
    } catch (Exception $e){
        echo '<h3 style="color: red;"> ** Catch - : ' . $e . ' ** </h3>';
    } finally {
        echo '<h3> ** Finally ** </h3>';
    }

?>