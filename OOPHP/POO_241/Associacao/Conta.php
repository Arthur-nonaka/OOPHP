<?php
class Conta {
    private $numero;
    private $saldo;
    private $titular;

    public function getNumero(){
        return $this->numero;
    }
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($saldo){
        $this->saldo = $saldo;
    }
    public function getTitular(){
        return $this->titular;
    }
    public function setTitular(Cliente $cliente){
        $this->titular = $cliente;
    }

}