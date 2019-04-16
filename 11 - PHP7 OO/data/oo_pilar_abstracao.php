<?php

    class Funcionario {
        //Atributos 
        public $nome = 'Nicolas';
        public $telefone = '41 999409631';
        public $numFilhos = 2;

        //Métodos
        function resumirCadFunc(){
            return "O funcionário $this->nome possui $this->numFilhos filho(s) e o seu número de telefone é $this->telefone.";
        }

        function modificarNumFilohs($numFilhos){
            //Afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    $y = new FuncionariO();

    echo $y->resumirCadFunc();

    $y->modificarNumFilohs(1);
    
    echo '<br>';

    echo $y->resumirCadFunc();
    
    

?>