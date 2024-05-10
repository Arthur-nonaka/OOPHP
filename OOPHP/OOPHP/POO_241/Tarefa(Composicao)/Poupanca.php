<?php

class Poupanca {
    public function __construct(private float $saldo) {

    }

    public function Depositar($valor) {
        $this->saldo += $valor;
    }
    public function Sacar($valor) {
        if($this->saldo >= $valor){
            $this->saldo -= $valor;
        }
    }

    public function GerarRendimento() {
        return "<br>Saldo: " . $this->saldo;
    }
}