<?php

include_once 'Comprador.php';
include_once 'Produto.php';
include_once 'Venda.php';
include_once 'Vendedor.php';

$produto1 = new Produto(1, "Bolacha", 2.20);
$produto2 = new Produto(2, "Feijao", 13.79);
$produto3 = new Produto(3, "Arroz", 40.99);

$vendedor = new Vendedor;

$comprador = new Comprador(100);

$comprador->MostrarAtributos();
$vendedor->MostrarAtributos();
$produto1->MostrarAtributos();

$venda = new Venda($comprador, $vendedor);
$venda->AddProduto($produto1);
$venda->AddProduto($produto2);
$venda->AddProduto($produto3);
$venda->FinalizarVenda();

$venda->MostrarAtributos();