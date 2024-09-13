<?php

interface ILeiDeEntrega {
    public function deveEntregarUrgente(NotaFiscal $nf);
}