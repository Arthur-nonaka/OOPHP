<?php
class Produto implements IOcarvel {
    private $nome;
    private $estoque;
    private $preco;

    public function __construct($nome, $estoque, double $preco) {
        $this->nome = $nome;
        $this->estoque = $estoque;
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }
}
