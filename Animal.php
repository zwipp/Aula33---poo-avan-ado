<?php

    abstract class Animal{ //abstract serve para fazer como um padrao, se eu tiver varias classes que contem aa mesmas entiddes, vc joga nela e puxa nos outros

        protected $fome;
        protected $energia;

        public function morre(){
            echo 'morri';
        }
    }

    class Cachorro extends Animal{

    }


    $c = new Cachorro;
    $c->morre();


?>