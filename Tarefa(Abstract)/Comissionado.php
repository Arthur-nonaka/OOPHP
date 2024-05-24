<?php
Class Comissionado extends Funcionario {
    private $porcentagem = 20;

    public function setPorcentagem($porcentagem) {
        $this->porcentagem = $porcentagem;
    }

    public function mostrarDados() {
        parent::mostrarDados();
        Echo "<br>Porcentagem: " . $this->porcentagem;
    }

    public function calcularSalario(int $diasUteis) {
        return ($this->salario / 30) * $diasUteis * ($this->porcentagem / 100) + $this->salario;
    }
}