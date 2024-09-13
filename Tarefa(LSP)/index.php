<?php

require_once "IConta.php";
require_once "ContaCorrente.php";
require_once "ContaPoupanca.php";

function realizarSaque(IConta $conta, $valor) {
    $conta->sacar($valor);
    echo "Novo Salario: " . $conta->getSaldo() . "\n";
}

$contaC = new ContaCorrente(1000);
realizarSaque($contaC, 1400);

$contaP = new ContaPoupanca(1000);
realizarSaque($contaP, 800);