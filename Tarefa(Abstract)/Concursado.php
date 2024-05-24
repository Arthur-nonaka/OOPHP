<?php
Class Concursado extends Funcionario {
    private $numeroEdital;

    public function setNumeroEdital($numeroEdital) {
        $this->numeroEdital = $numeroEdital;
    }

    public function mostrarDados() {
        parent::mostrarDados();
        Echo "<br>Numero Edital: " . $this->numeroEdital;
    }

    public function calcularSalario(int $diasUteis) {
        return ($this->salario / 30) * $diasUteis;
    }
}