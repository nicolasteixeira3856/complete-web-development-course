<?php

    namespace A;

    interface CadastroInterface {
        public function salvar();
    }

    class Cliente implements \B\CadastroInterface {
        public $nome = 'Jorge';

        public function __construct(){
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function remover(){

        }
    }

    namespace B;

    interface CadastroInterface {
        public function remover();
    }

    class Cliente implements \A\CadastroInterface {
        public $nome = 'Nicolas';

        public function __construct(){
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($attr){
            return $this->$attr;
        }

        public function salvar(){
            
        }
    }


    $c = new \A\Cliente();
    print_r($c);
    echo $c->__get('nome');

?>