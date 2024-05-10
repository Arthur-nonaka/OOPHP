<?php

class ContaCorrente {
    public function __construct(private float $saldo, private float $limite) {
         
    }

    public function Depositar($valor) {
        $this->saldo += $valor;
    }

    public function Sacar($valor) {
        if( $this->saldo + $this->valor >= $valor) {
            $this->saldo -= $valor;
        }
    }

    public function GerarExtrato() {
        return "<br >Saldo: " . $this->saldo . " Limite: " . $this->limite;
    }

}