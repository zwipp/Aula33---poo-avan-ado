<?php

    require('Espectador.php');

    class Inscrito extends Espectador{

        private $email;
        private $senha;


        public function __construct($nome,$email,$senha){
            $this->nome = $nome;
            $this->email = $email;
            $this->senha = $senha;
        }

        public function comentar(string $texto){
            echo '<br>' . $this->nome . ' falou: ' . $texto;
        }

        public function setEmail(string $email){
            $this->email=$email;
        }

        public function getEmail(){
            return $this->email;
        }

    }

    $i = new Inscrito('Zwipp','zwipp@zwipp','123');
    $i->visualizar();

    $i->setEmail('123@123');
    echo $i ->getEmail();
?>