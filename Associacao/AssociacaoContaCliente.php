<?php

require_once "Cliente.php";
require_once "Conta.php";

$cliente = new Cliente();
$cliente->setNome("Arthur");
$cliente->setEndereco("Rua Antonio Queiros Sobrinho, 108");
$cliente->setRg("628353120");

$conta = new Conta();
$conta->setNumero(1);
$conta->setSaldo(100);
$conta->setTitular($cliente);

echo "<pre>";
var_dump($conta);
echo "</pre>";
