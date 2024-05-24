<?php
abstract Class Funcionario {
    protected $codigo;
    protected $nome;
    protected $salario;

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getSalario() {
        return $this->salario;
    }
    public function getCodigo() {
        return $this->codigo;
    }

    public function mostrarDados() {
        echo "<br>" . $this->codigo . "<br>Nome: " . $this->nome . "<br>Salario: " . $this->salario;
    }
    public abstract function calcularSalario(int $diasUteis);

}