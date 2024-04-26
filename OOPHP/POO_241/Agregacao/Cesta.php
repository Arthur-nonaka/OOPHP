<?php
class Cesta {
    private $horas;
    private $itens;

    public function __construct() {
        $this->horas = date('Y-m-d H:i:s');
        $this->itens = [];
    }   
    public function setHoras($horas) {
        $this->horas = $horas;
    }
    public function getHoras() {
        return $this->horas;
    }
    public function AdicionarItem(Produto $produto) {
        $this->itens[] = $produto;
    }
    public function getProduto() {
        return $this->itens;
    } 
}