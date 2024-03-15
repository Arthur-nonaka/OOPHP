<?php

class Account {
    private $numero;
    private $titular;
    private $saldo;

    public function Show() {
        Echo "<br>Número: " . $this->number;
        echo " Titular: " . $this->titular;
        echo " Saldo: " . $this->saldo;
    }
    public function setNumber($number) {
        $this->number = $number;
    }
    public function getNumber() {
        return $this->number;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    public function getTitulo() {
        return $this->titulo;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function getSaldo() {
        return $this->saldo;
    }

}

$c1 = new Account;
$c1->setNumber(1);
Echo $c1->getNumber();