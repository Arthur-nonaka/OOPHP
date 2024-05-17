<?php

class Account
{
    private $number;
    private $titular;
    private $saldo;

    public function Show()
    {
        echo "<br>Número: " . $this->number;
        echo " Titular: " . $this->titular;
        echo " Saldo: " . $this->saldo;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
    public function getNumber()
    {
        return $this->number;
    }
    public function setTitulo($titulo)
    {
        $this->titular = $titulo;
    }
    public function getTitulo()
    {
        return $this->titular;
    }
    public function Sacar($valorSaque)
    {
        if ($this->saldo >= $valorSaque) {
            $this->saldo = $this->saldo - $valorSaque;
        }
    }
    public function Depositar($valorDeposito)
    {
        if ($valorDeposito > 0) {
            $this->saldo = $this->saldo + $valorDeposito;
        }
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
}

$c1 = new Account;
$c1->setNumber(1);
echo $c1->getNumber();
