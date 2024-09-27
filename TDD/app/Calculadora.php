<?php

namespace app;

class Calculadora{

    public function soma($a, $b) {
        return $a+$b;
    }
    public function subtracao($a, $b) {
        return $a-$b;
    }
    public function divisao($a, $b) {
        return $a/$b;
    }
    public function multiplicacao($a, $b) {
        return $a*$b;
    }
}