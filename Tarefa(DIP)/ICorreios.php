<?php

interface ICorrerios {
    public function enviarPorSedex10(NotaFiscal $nf);
    public function enviarPorSedexComum(NotaFiscal $nf);
}