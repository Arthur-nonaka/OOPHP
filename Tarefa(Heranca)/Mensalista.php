<?php

class Mensalista extends Funcionario {
    private $qtdHorasTrabalhadas;
    public function __construct($codigo,$nome, $salario, $qtdHorasTrabalhadas) {
        parent::__construct($codigo, $nome, $salario);
        $this->qtdHorasTrabalhadas = $qtdHorasTrabalhadas;
    }

    public function getHorasTrabalhadas() {
        return $this->qtdHorasTrabalhadas;
    }
    public function setHorasTrabalhadas($qtdHorasTrabalhadas) {
        $this->qtdHorasTrabalhadas = $qtdHorasTrabalhadas;
    }
}