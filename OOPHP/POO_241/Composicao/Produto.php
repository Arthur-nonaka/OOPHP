<?php

class Produto {
    private $caracteristica;
    public function __construct(private int $codigo, private string $nome, private float $preco, private int $estoque) {
        $this->caracteristica = [];
    }

    public function addCaracteristica($nome, $valor) {
        $this->caracteristica = new Caracteristica($nome, $valor);
    } 
    public function getCaracteristica() {
        return $this->caracteristica;
    } 
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function getCodigo() {
        return $this->codigo;
    }
    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }
    public function getEstoque() {
        return $this->estoque;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
    }
    public function getPreco() {
        return $this->preco;
    }

    public function MostrarAtributos() {
        print "<br> Produto {$this->getNome()} <br> Codigo:{$this->getCodigo()} <br> Preço: {$this->getPreco()} <br>";
    }
}