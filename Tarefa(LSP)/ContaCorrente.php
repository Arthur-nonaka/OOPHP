<?php

class ContaCorrente implements IConta {
    protected $saldo;

    public function __construct($saldo) {
        $this->saldo = $saldo;
    }

    public function sacar($valor) {
        $this->saldo -= $valor;
    }
    public function getSaldo() {
        return $this->saldo;
    }
}