<?php

    class Pai {
        private $nome = 'Nicolas';
        protected $sobrenome = 'Teixeira';
        public $humor = 'Triste';
        
        public function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        
        public function __get($atributo){
            return $this->$atributo;
        }
        

        private function executarMania(){
            $rand = rand(1, 10);
            if ($rand >= 1 && $rand <= 5){
                echo 'Assobiar';
            }else{
                $this->responder();
            }
        }

        protected function responder(){
            echo 'Oi';
        }
        
        public function executarAcao($acao){
            //$this->$acao();
            $this->executarMania();
        }
    }

    class Filho extends Pai {
        public function __construct(){
            echo '<pre>';
                print_r(get_class_methods($this));
            echo '</pre>';
        }

        private function executarMania(){
            echo 'Cantar';
        }

        protected function responder(){
            echo 'Bacana';
        }

        public function x(){
            $this->executarMania();
        }
    }

    $filho = new Filho();

    echo '<pre>';
        print_r($filho);
    echo '</pre>';

    $filho->executarAcao('executarmania');
    echo '<br>';
    $filho->x();

?>