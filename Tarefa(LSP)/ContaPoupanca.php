<?php

class ContaPoupanca implements IConta {
    protected $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function sacar($valor) {
        if($valor > $this->saldo) {
            throw new Exception("Saldo insuficiente");
        }
        $this->saldo -= $valor;
    }
    public function getSaldo() {
        return $this->saldo;
    }
}