<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            /* 
                E = AND ou && - Todas as expressões forem verdadeiras
                OU = OR ou || - Pelo menos uma das expressões for verdadeira
                XOR = Verdadeiro apenas se uma das expressões for verdadeira, mas não ambas
                Negação = ! - Inverte o resultado da experessão
            
            */

            //() Estabelecer precedência

            //F ou V = V
            if((22 == 22 && 3 == 3) || 5 != 5){
                echo 'Verdadeiro';
            }else{
                echo 'Falso';
            }

        ?>

    </body>
</html>