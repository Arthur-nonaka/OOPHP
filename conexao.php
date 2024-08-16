<?php

require "OrcavelInterface.php";
require "Servico.php";
require "Produto.php";
require "Orcamento.php";

$orc = new Orcamento();

$orc->adiciona(new Produto('Teclado', 10, 200), 2);
$orc->adiciona(new Produto('Impressora', 15, 500), 1);

$orc->adiciona(new Servico('Lavar Cabelo', 100), 1);

Echo $orc->calcularTotal();

var_dump($orc);