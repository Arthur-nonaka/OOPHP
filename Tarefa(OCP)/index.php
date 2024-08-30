<?php

require_once "ICalculadoraSalarios.php";
require_once "Funcionario.php";
require_once "FuncionarioContrato.php";
require_once "FuncionarioPermanente.php";

$fc = new Funcionario("jack", 1000, new FuncionarioContrato());
echo $fc->getSalario() . "<br>";

$fp = new Funcionario("Gabriel", 1000, new FuncionarioPermanente());
echo $fp->getSalario();