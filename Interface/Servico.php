<?php

class Servico implements IOrcavel {
    private $descricao;
    private $preco;

    public function __construct($descricao, double $preco) {
        $this->descricao = $descricao;
        $this->preco = $preco;
    }

    public function getPreco() {
        return $this->preco;
    }
}