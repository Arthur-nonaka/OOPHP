<?php

require_once "Poupanca.php";
require_once "ContaCorrente.php";
require_once "Banco.php";

$banco = New Banco();

$banco->addPoupanca(1000);
$banco->addPoupanca(3000);
$banco->addContaCorrente(30000,100);
$banco->addContaCorrente(33,10000);
$banco->addContaCorrente(300,1000);

// var_dump($banco);

$banco->MostrarContas();
