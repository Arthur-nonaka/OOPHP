<?php

class Correios implements ICorreios {
    public function enviarPorSedex10(NotaFiscal $nf) {
        var_dump($nf);
        echo "enviado por Sedex10";
    }
    public function enviarPorSedexComum(NotaFiscal $nf) {
        var_dump($nf);
        echo "enviado por Sedex Comum";
    }
    
}