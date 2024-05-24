<?php

require_once "Funcionario.php";
require_once "Concursado.php";
require_once "Comissionado.php";
require_once "Departamento.php";

$comissionado = new Comissionado();
$comissionado->setCodigo(1);
$comissionado->setNome("Arthur");
$comissionado->setSalario(1200);
// $comissionado->setPorcentagem(30);
// $comissionado->mostrarDados();
// Echo "<br>Salario Calculado: " . $comissionado->calcularSalario(20);

$concursado = new Concursado();
$concursado->setCodigo(2);
$concursado->setNome("Pedro");
$concursado->setSalario(1200);
$concursado->setNumeroEdital(233);
// $concursado->mostrarDados();
// Echo "<br>Salario Calculado: " . $concursado->calcularSalario(30);

$departamento = New Departamento (1, "Departamento de RH");
$departamento->admitirFuncionario($comissionado);
$departamento->admitirFuncionario($concursado);
$departamento->mostrarAtributos();

Echo "<br>Folha de Pagamento " . $departamento->calcularFolhaPagamento();

$departamento->demitirFuncionario(1);
$departamento->mostrarAtributos();