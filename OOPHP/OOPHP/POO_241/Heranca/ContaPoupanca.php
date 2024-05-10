<?php
class ContaPoupanca extends Conta {


    public function Retirar($quantia) {
        if($this->saldo >= $quantia && $quantia > 0) {
            $this->saldo -= $quantia;
            return true;
        }
        else {
            return false;
        }
    }
}