<?php

class NotaFiscal {
    private $imposto;
    private $CNPJ;

    public function __construct($imposto, $CNPJ) {
        $this->imposto = $imposto;
        $this->CNPJ = $CNPJ;
    }

    public function setImposto($imposto) {
        $this->imposto = $imposto;
    }
}