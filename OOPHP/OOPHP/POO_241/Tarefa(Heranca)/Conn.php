<?php
require_once "Funcionario.php";
require_once "Horista.php";
require_once "Mensalista.php";

$horista = new Horista(1,"Arthur",1200,30);
echo "<pre>";
var_dump($horista);
echo "</pre>";
$mensalista = new Mensalista(2,"JP",1800,150);
echo "<pre>";
var_dump($mensalista);
echo "</pre>";