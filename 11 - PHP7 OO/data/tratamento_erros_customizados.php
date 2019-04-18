<?php

    class MinhaExceptionCustom extends Exception {
        private $erro = '';

        public function __construct($erro){
            $this->erro = $erro;
        }

        public function exibirMensagemErroCustomizada(){
            echo "<div style='border: 1px solid black; padding: 15px; background-color:red; color:white;'>";
                echo $this->erro;
            echo '</div>';
        }
    }

    try {
        throw new MinhaExceptionCustom ('Esse é um erro de teste');

        //Error (PHP)
        //Exception (Programadores)
        //Customizadas (Programadores)
        
    } catch (MinhaExceptionCustom $e){
        $e->exibirMensagemErroCustomizada();
    }

?>