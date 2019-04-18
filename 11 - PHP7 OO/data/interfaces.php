<?php

    interface EquipamentoEletronicoInterface {
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface{
        public function abrirPorta(){

        }

        public function ligar(){
            echo 'Ligar';
        }
        public function desligar(){
            echo 'Desligar';
        }
    }

    class Tv implements EquipamentoEletronicoInterface{
        public function trocarCanal(){

        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }
    }

    $x = new Geladeira();
    $y = new Tv();

    // ------------------------------------------------------------- //

    interface mamiferoInterface {
        public function respirar();
    }

    interface terrestreInterface {
        public function andar();
    }

    interface aquaticoInterface {
        public function nadar();
    }

    class Humano implements terrestreInterface, mamiferoInterface {
        public function conversar(){
            echo 'Conversar';
        }
        public function respirar(){
            echo 'Respirar';
        } 

        public function andar(){
            echo 'Andar';
        }
        
    }

    class Baleia implements aquaticoInterface, mamiferoInterface {
        private function esguichar(){
            echo 'Esguichar';
        }

        public function respirar(){
            echo 'Respirar';
        }

        public function nadar(){
            echo 'Nadar';
        }
    }

    // ------------------------------------------------------------- //

    interface AnimalInterface {
        public function comer();
    }

    interface AveInterface extends AnimalInterface{
        public function voar();
    }

    class Papagaio implements AveInterface{
        public function voar(){

        }

        public function comer(){

        }
    }

    echo '<h1>Visualizar o código fonte</h1>'

?>