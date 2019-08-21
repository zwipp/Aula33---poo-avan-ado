<?php

    class Conta{
        protected $saldo;

        public function __construct($saldo){
            $this->saldo = $saldo;
        }

        public function sacar(float $valor){
            $this->saldo -= $valor;
        }

        public function depositar(float $valor){
            $this->valor += $valor;
        }
    }

    class Poupanca extends Conta{

        public function render($tx_rendimento){
            $this->saldo = $this->saldo * (1+$tx_rendimento);
        }
    }

    $c = new Poupanca(100);
    print_r($c);
    $c->render(0.05);
    print_r($c); 
    

?> 