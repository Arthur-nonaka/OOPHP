<?php

class Funcionario
{
    public function __construct(private Int $codigo, private String $nome, private Float $salario)
    {

    }

    public function getCodigo()
    {
        return $this->codigo;
    }

    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getSalario()
    {
        return $this->salario;
    }

    public function setSalario($salario)
    {
        $this->salario = $salario;
    }


    public function MostrarAtributos()
    {
        echo "<br> Codigo: " . $this->codigo;
        echo "<br> Nome: " . $this->nome;
        echo "<br> Salario: " . $this->salario;
    }

    public function ReajusteSalarial($reajuste)
    {
        $this->salario = $this->salario + ($this->salario * ($reajuste / 100));
    }
}

$f1 = new Funcionario(1, "Arthur", 2400.40);
$f1->MostrarAtributos();



$f2 = new Funcionario(2, "Isabela", 1000.00);
$f2->ReajusteSalarial(50);
$f2->MostrarAtributos();
