<?php
require_once "Cliente.php";
require_once "ClienteFisico.php";
require_once "Teste.php";

$cliente = new ClienteFisico();
$cliente->setCodigo(1);
$cliente->setNome("Arthur");
$cliente->setIdade(35);
$cliente->setRG("245553443-2");
$cliente->setCPF("404974278-00");
$cliente->MostrarDados();
// var_dump($cliente);
$cliente->avaliaIdade();

$teste = new Teste();
$teste->verificaIdade($cliente);