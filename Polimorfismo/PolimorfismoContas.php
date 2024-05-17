<?php

require_once "Conta.php";
require_once "ContaPoupanca.php";
require_once "COntaCorrente.php";

$p = new ContaPoupanca(560, "CP 10.500-3", 100);
$c = new ContaCorrente(600, "CC 23.650-2", 500, 100);

echo $p->MostrarAtributos();
Echo "<br>";
echo $c->MostrarAtributos();