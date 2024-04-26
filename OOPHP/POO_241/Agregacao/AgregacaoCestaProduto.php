<?php
require_once 'Cesta.php';
require_once 'Produto.php';

$produto1 = new Produto("Chinelo", 10, 15.40);
$produto2 = new Produto("Cafe", 15, 55.40);
$produto3 = new Produto("Copo", 2, 10.00);

$cesta = new Cesta;

// echo $cesta->getHoras();

$cesta->AdicionarItem($produto1);
$cesta->AdicionarItem($produto2);
$cesta->AdicionarItem($produto3);


foreach($cesta->getProduto() as $item) {
    print "Nome: {$item->getNome()}  <br>";
}

