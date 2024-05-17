<?php

class Comprador
{
    public function __construct(private float $verba)
    {

    }

    public function Pagar($produtos)
    {
        $precoTotal = 0;
        foreach ($produtos as $produto) {
            $precoTotal += $produto->getPreco();
        }

        if ($this->getVerba() >= $precoTotal) {
            $this->setVerba($this->getVerba() - $precoTotal);
        }
    }

    public function setVerba($verba)
    {
        $this->verba = $verba;
    }
    public function getVerba()
    {
        return $this->verba;
    }

    public function MostrarAtributos()
    {
        print "<br> Comprador verba <br> {$this->getVerba()} <hr>";
    }
}