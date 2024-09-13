<?php

class EntregadorDeNFs {
    private ICorreios $correios;
    private ILeiDeEntrega $lei;

    public function __construct(ICorreios $correios, ILeiDeEntrega $lei) {
        $this->correios = $correios;
        $this->lei = $lei;
    }

    public function entregar(NotaFiscal $nf) {
        if($this->lei->deveEntregarUrgente($nf))
            $this->correios->enviarPorSedex10($nf);
        else 
            $this->correios->enviarPorSedexComum($nf);
    }
}