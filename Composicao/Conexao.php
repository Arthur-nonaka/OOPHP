<?php
require_once "Caracteristica.php";
require_once "Produto.php";

$p = new Produto(1, "Cafe", 5.12, 10);

$p->addCaracteristica("expresso", 'xicara');
$p->addCaracteristica("americano", 'copo');

var_dump($p->getCaracteristica());