<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            $nome = "Nícolas";
            $cor = "Azul";
            $idade = 20;
            $hobby = "jogar videogame";

            echo 'Olá '.$nome.', vi que sua cor preferida é '.$cor.', estou vendo também que você possui '.$idade.' anos e que gosta de '.$hobby.'.';

            echo '<br>';
            echo '<hr>';
            echo 'Aspas duplas concatenam diretamente mas são um pouco mais lentas no geral';
            echo '<hr>';
            

            //Aspas duplas concatenam diretamente mas são um pouco mais lentas no geral
            echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo também que você possui $idade anos e que gosta de $hobby.";

        ?>

    </body>
</html>