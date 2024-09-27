<?php
require_once "ICorreios.php";
require_once "Correios.php";
require_once "ILeiDeEntrega.php";
require_once "LeiDeEntrega.php";
require_once "NotaFiscal.php";
require_once "DespachadorDeNotasFiscais.php";
require_once "EntregadorDeNFs.php";
require_once "CalculadorDeImposto.php";

$nf = new NotaFiscal("85094001-01", 50000);
$impostos = new CalculadorDeImposto();
$correio = new Correios();
$leiDeEntrega = new LeiDeEntrega();
$entregador = new EntregadorDeNFs($correio, $leiDeEntrega);
$despachador = new DespachadorDeNotasFiscais($impostos, $entregador);

$despachador->processa($nf);





