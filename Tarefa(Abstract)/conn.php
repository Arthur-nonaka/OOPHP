<?php

require_once "Funcionario.php";
require_once "Concursado.php";
require_once "Comissionado.php";
require_once "Departamento.php";
require_once "Filhos.php";

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

// $departamento->demitirFuncionario(1);
$departamento->mostrarAtributos();

$filho1 = new Filhos(1,"Jhon", 17);
$filho2 = new Filhos(2,"Fih", 19);
$filho3 = new Filhos(3,"Maria", 4);

$comissionado->adicionarFilho($filho1);
$comissionado->adicionarFilho($filho2);
$concursado->adicionarFilho($filho3);

$comissionado->listarDadosFilhos();
$concursado->listarDadosFilhos();

$departamento->mostrarQtdeFilhosPorFuncionario();

$comissionado->removerFilho();
$comissionado->listarDadosFilhos();