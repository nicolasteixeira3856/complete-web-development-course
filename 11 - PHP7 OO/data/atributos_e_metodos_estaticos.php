<?php

    class Exemplo {
        public static $atributo1 = 'Eu sou um atributo estático'; //Não está acessível através do operador -> (seta)
        public $atributo2 = 'Eu sou um atributo normal';

        public static function metodo1(){ //Não pode utilizar o $this
            echo 'Eu sou um método estático';
        }

        public function metodo2(){
            echo 'Eu sou um método normal';
        }
    }

    echo Exemplo::$atributo1;
    echo '<br>';
    Exemplo::metodo1();

    echo '<hr>';

    //echo Exemplo::metodo2(); /* Não utilizar para métodos não estáticos */

?>