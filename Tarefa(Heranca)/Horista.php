<?php

class Horista extends Funcionario {
    private $qtdHorasSemana;
    public function __construct($codigo,$nome, $salario, $qtdHorasSemana) {
        parent::__construct($codigo, $nome, $salario);
        $this->qtdHorasSemana = $qtdHorasSemana;
    }

    public function getHorasSemana() {
        return $this->qtdHorasSemana;
    }
    public function setHorasSemana($qtdHorasSemana) {
        $this->qtdHorasSemana = $qtdHorasSemana;
    }
}