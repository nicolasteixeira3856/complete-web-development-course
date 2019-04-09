<html>
    <head>
        <meta charset="utf-8">
        <title>Curso PHP</title>
    </head>
    <body>
        <?php

            $usuario_possui_cartao_loja = true;
            $valor_compra = 60;

            $valor_frete = 50;
            $recebeu_desconto_frete = true;

            if($usuario_possui_cartao_loja == true && $valor_compra >= 100){
                $valor_frete = 0;
            }else if($usuario_possui_cartao_loja == true && $valor_compra >= 80){
                $valor_frete = 10;
            }else if($usuario_possui_cartao_loja == true && $valor_compra >= 50){
                $valor_frete = 25;
            }else{
                $recebeu_desconto_frete = false;
            }


        ?>

        <h1>Detalhes do pedido</h1>
        <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO';?></p>

        <p>Valor da compra: <?= $valor_compra ?></p>

        <p>Recebeu desconto no frete? <?=$recebeu_desconto_frete ? 'SIM' : 'NÃO';?> </p>

        <p>Valor do frete: <?= $valor_frete ?></p>

    </body>
</html>