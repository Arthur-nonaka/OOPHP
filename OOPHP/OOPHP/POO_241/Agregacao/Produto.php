<?php
class Produto {
    public function __construct(private string $nome, private int $estoque, private float $preco) {

    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }
    public function getEstoque() {
        return $this->estoque;
    }
    public function setPreco($preco) {
        $this->preco = $preco;
    }
    public function getPreco() {
        return $this->preco;
    }

}