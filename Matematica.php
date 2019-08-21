<?php

    class Matematica {

        public static function somar(float $a, float $b){ //pra vc usar o somar, vc nao precisará usar o new
            return $a + $b;
        }
    }

    echo Matematica::somar(4,5); //substitui o new, vc só coloca o nome :: e a função

?>