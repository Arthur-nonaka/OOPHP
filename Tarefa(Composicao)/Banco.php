<?php

class Banco {
    private $poups;
    private $contas;
    public function __construct() {
        $this->poups = [];
        $this->contas = [];

    }

    public function addPoupanca($saldo) {
        $this->poups[] = new Poupanca($saldo);
    }

    public function addContaCorrente($saldo, $limite) {
        $this->contas[] = new ContaCorrente($saldo, $limite);
    }

    public function MostrarContas() {
        echo "Poupanças: ";
        foreach($this->poups as $poupanca) {
            echo $poupanca->GerarRendimento();
        }
        echo "<br>Conta Corrente: ";
        foreach($this->contas as $contaCorrente) {
            echo $contaCorrente->GerarExtrato();
        }
    }
}