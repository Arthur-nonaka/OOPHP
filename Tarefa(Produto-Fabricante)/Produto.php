<?php

class Produto
{

    public function __construct(private string $descricao, private float $estoque, private float $preco, private Fabricante $fabricante)
    {

    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }
    public function setEstoque($estoque)
    {
        $this->estoque = $estoque;
    }
    public function getEstoque()
    {
        return $this->estoque;
    }
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }
    public function getPreco()
    {
        return $this->preco;
    }
    public function setFabricante(Fabricante $fabricante)
    {
        $this->fabricante = $fabricante;
    }
    public function getFabricante()
    {
        return $this->fabricante;
    }
}