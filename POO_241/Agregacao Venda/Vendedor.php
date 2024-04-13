<?php

class Vendedor
{
    public function __construct(private float $comissao = 0)
    {

    }

    public function ComissaoDaVenda(array $produtos)
    {
        $total = 0;
        foreach ($produtos as $produto) {
            $total += ($produto->getPreco() / 100) * 2;
        }
        $this->setComissao($total + $this->getComissao());
    }
    public function setComissao($comissao)
    {
        $this->comissao = $comissao;
    }
    public function getComissao()
    {
        return $this->comissao;
    }

    public function MostrarAtributos()
    {
        print "<br>Vendedor comissao <br> {$this->getComissao()} <hr>";
    }
}