<?php

class Servico implements IOrcavel {
    private $descricao;
    private float $preco;

    public function __construct($descricao, float $preco) {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }
}