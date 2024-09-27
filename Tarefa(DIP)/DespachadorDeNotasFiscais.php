<?php 

class DespachadorDeNotasFiscais {
    private CalculadorDeImposto $impostos;
    private EntregadorDeNFs $entregador;

    public function __construct( CalculadorDeImposto $impostos, EntregadorDeNFs $entregador) {
        $this->impostos = $impostos;
        $this->entregador = $entregador;
    }

    public function processa(NotaFiscal $nf) {
        $imposto = $this->impostos->para($nf);
        $nf->setImposto($imposto);

        $this->entregador->entregar($nf);
    }
} 