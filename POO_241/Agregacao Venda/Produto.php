<?php

class Produto {
    public function __construct(private int $codigo, private string $nome, private float $preco) {

    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function getCodigo() {
        return $this->codigo;
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