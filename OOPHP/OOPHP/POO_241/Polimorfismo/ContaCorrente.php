<?php

class ContaCorrente extends Conta {
    private $limite;

    public function __construct($agencia, $conta, $saldo, $limite) {
        parent::__construct($agencia, $conta, $saldo);
        $this->limite = $limite;
    }

    public function Retirar($quantia) {
        if(($this->saldo + $this->limite) >= $quantia && $quantia > 0) {
            $this->saldo -= $quantia;
            return true;
        }
        else {
            return false;
        }
    }

    public function mostrarAtributos() {
        return parent::mostrarAtributos() . " Limite: {$this->limite} <br>";
    }
}