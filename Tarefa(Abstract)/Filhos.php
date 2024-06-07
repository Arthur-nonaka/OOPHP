<?php
class Filhos {
    private $codigo;
    private $nome;
    private $idade;

    public function __construct($codigo,$nome,$idade){
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function verificarMaiorIdade() {
        if($this->idade > 18) {
            return true;
        }
        return false;
    }

    public function mostrarDados() {
        echo "<br> Filho - " . $this->nome . "<br>" .$this->idade . " Anos";
    }
}