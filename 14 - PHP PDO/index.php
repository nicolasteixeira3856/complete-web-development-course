<?php
    //$conexao = new PDO('DSN:host=[nome_do_host];dbname=[nome_do_banco_de_dados]', 'usuario_do_banco_de_dados', 'senha_do_banco_de_dados');

    if(!empty($_POST['email']) && !empty($_POST['senha'])){

        $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
        $user = 'root';
        $password = '';


        try {
            $conexao = new PDO($dsn, $user, $password);
            /* SQL INJECTION
                $query = "select * from tb_usuarios where ";
                $query .= " email = '{$_POST['email']}'";
                $query .= " AND senha = '{$_POST['senha']}'";

                echo $query;

                $stmt = $conexao->query($query);
                $usuario = $stmt->fetch();
                echo '<hr>';
                echo '<pre>';
                    print_r($usuario);
                echo '</pre>';
            */
            /* PREVENÇÃO DO SQL INJECTION COM O PREPARE STATEMENT E BIND VALUE */
            $query = "SELECT * FROM tb_usuarios WHERE";
            $query .= " email = :usuario ";
            $query .= " AND senha = :senha ";

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':usuario', $_POST['email']);
            $stmt->bindValue(':senha', $_POST['senha']);

            $stmt->execute();

            $usuario = $stmt->fetch();

            echo '<pre>';
                print_r($usuario);
            echo '</pre>';


        } catch (PDOException $e) {
            echo 'Erro: ' . $e->getCode() . ' <br> Mensagem: ' . $e->getMessage();
        }

    }   

    
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
    </head>
    <body>
        <form method="post" action="index.php">
            <input type="text" placeholder="email" name="email">
            <br/>
            <input type="password" placeholder="senha" name="senha">
            <br/>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>