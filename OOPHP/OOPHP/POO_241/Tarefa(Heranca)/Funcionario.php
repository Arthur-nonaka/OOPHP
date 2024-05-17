<?php
class Funcionario {
    protected $codigo;
    protected $nome;
    protected $salario;
    public function __construct($codigo,$nome, $salario){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function getCodigo() {
        return $this->codigo;
    }
    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSalario() {
        return $this->salario;
    }
    public function setSalario($salario) {
        $this->salario = $salario;
    }
}