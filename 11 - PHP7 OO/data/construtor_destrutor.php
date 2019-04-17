<?php

    class Pessoa {
        public $nome = null;

        function __construct($nome){
            echo 'Objeto Criado';
            $this->nome = $nome;
        }

        function __destruct(){
            echo 'Objeto Removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->__get('nome') . ' está correndo';
        }
    }

    $pessoa = new Pessoa('Nicolas');
    echo '<hr>';

    echo 'Nome: ' . $pessoa->__get('nome');
    echo '<br>';
    echo $pessoa->correr();

    echo '<hr>';
    unset($pessoa);
?>