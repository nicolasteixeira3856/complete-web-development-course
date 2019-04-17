<?php

    class Funcionario {
        //Atributos 
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //Getters e Setters
        /*function setNome($nome){
            $this->nome = $nome;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }*/

        //Getters e Setters (Overloading de atributos e métodos)
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

        //Métodos
        function resumirCadFunc(){
            //return "O funcionário $this->nome trabalha na empresa como $this->cargo e recebe $this->salario, seu número de telefone é $this->telefone e ele possui $this->numFilhos filho(s)";
            return 'O funcionário ' . $this->__get('nome') . ' trabalha na empresa como ' . $this->__get('cargo') . ' e recebe ' . $this->__get('salario') . ' seu número de telefone é ' . $this->__get('telefone') . ' e ele possui ' . $this->__get('numFilhos') . ' filho(s) ';
        }

        function modificarNumFilohs($numFilhos){
            //Afetar um atributo do objeto
            $this->numFilhos = $numFilhos;
        }
    }

    /*$y = new FuncionariO();
    $y->setNome('John Snow');
    $y->setNumFilhos(1);
    $y->setTelefone('999409631');
    //echo $y->resumirCadFunc();
    echo $y->getNome() . ' possui ' . $y->getNumFilhos() . ' filho(s)';

    echo '<br />';

    $x = new FuncionariO();
    $x->setNome('Maria');
    $x->setNumFilhos(2);
    $x->setTelefone('999409631');
    echo $x->getNome() . ' possui ' . $x->getNumFilhos() . ' filho(s)';*/
    
    
    $y = new FuncionariO();
    $y->__set('nome', 'Nícolas Teixeira');
    $y->__set('numFilhos', 0);
    $y->__set('telefone', '999409631');
    $y->__set('cargo', 'Estagiário de Desenvolvimento Web');
    $y->__set('salario', '1100');
    echo $y->resumirCadFunc();
    //echo 'O funcionário ' . $y->__get('nome') . ' trabalha na empresa como ' . $y->__get('cargo') . ' e recebe ' . $y->__get('salario') . ' seu número de telefone é ' . $y->__get('telefone') . ' e ele possui ' . $y->__get('numFilhos') . ' filho(s) ' ;


?>