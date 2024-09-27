<?php

class LeiDeEntrega implements ILeiDeEntrega {
    public function deveEntregarUrgente(NotaFiscal $nf) {
        if( $nf->getImposto() > 1000) {
            return true;
        }
        return false;
    }
}