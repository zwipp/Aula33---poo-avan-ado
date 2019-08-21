<?php

    class Espectador{

        protected $nome;

        public function __construct(string $enome){
            $this->nome = $enome;
        }

        public function visualizar(){
            echo $this->nome ." eu vejo vc";
        }

    }

    //$e = new Espectador('Zwipp');
    //$e->visualizar();
?>