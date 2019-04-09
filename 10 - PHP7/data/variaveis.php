<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php
            //String
            $nome = "Nícolas Teixeira";
            //Int
            $idade = 20;
            //Flaot
            $peso = 95.5;
            //Boolean
            $fumante_sn = true;
        ?>

        <h1>Ficha Cadastral:</h1>
        <br>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante_sn ?></p>
    </body>
</html>