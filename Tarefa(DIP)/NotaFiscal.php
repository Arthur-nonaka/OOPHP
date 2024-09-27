<?php

class NotaFiscal {
    private $imposto;
    private $valor;
    private $CNPJ;

    public function __construct($CNPJ, $valor) {
        $this->CNPJ = $CNPJ;
        $this->valor = $valor;
    }

    public function setImposto($imposto) {
        $this->imposto = $imposto;
    }

    public function getImposto() {
        return $this->imposto;
    }

    public function getValor() {
        return $this->valor;
    }
}