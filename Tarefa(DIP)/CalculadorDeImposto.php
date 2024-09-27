<?php

class CalculadorDeImposto {
    private $porcentagem = 0.15;

    public function para(NotaFiscal $nf) {
        return $nf->getValor() * $this->porcentagem;
    }
}