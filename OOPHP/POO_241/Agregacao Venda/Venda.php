<?php

class Venda
{
    public function __construct(private Comprador $comprador, private Vendedor $vendedor, private array $produtos = [])
    {
    }

    public function setComprador(Comprador $comprador)
    {
        $this->comprador = $comprador;
    }
    public function getComprador()
    {
        return $this->comprador;
    }
    public function setVendedor(Vendedor $vendedor)
    {
        $this->vendedor = $vendedor;
    }
    public function getVendedor()
    {
        return $this->vendedor;
    }
    public function AddProduto(Produto $produto)
    {
        $this->produtos[] = $produto;
    }
    public function getProdutos()
    {
        return $this->produtos;
    }

    public function FinalizarVenda()
    {
        if (sizeof($this->getProdutos()) != 0) {
            $this->comprador->Pagar($this->produtos);
            $this->vendedor->ComissaoDaVenda($this->produtos);
        }
    }

    public function MostrarAtributos()
    {
        echo "<h3> Venda </h3>";
        $this->getComprador()->MostrarAtributos();
        $this->getVendedor()->MostrarAtributos();
        $valorTotal = 0;
        foreach ($this->getProdutos() as $produto) {
            $produto->MostrarAtributos();
            $valorTotal += $produto->getPreco();
        }
        print "<br> Valor Total: {$valorTotal}";
    }
}