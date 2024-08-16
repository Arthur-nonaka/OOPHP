<?php
class Produto implements IOrcavel {
    private $nome;
    private $estoque;
    private $preco;

    public function __construct($nome, $estoque, float $preco) {
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }
}
